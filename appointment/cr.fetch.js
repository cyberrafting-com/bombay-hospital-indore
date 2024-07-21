class CrFetch {
    constructor() {
        this.url = null;
        this.postData = new FormData();
        this.postDataType = "json";
        this.postData = {};
        this.successCallback={};
        this.failureCallback={};
        this.headers = {
            'X-Requested-With': 'XMLHttpRequest',
            'cr-timezone':new Date().getTimezoneOffset()
        };
        this.abortController = null;
    }
    setUrl(url) {
        this.url = url;
        return this;
    }
    getUrl() {
        let url = this.url;
        const getData = this.getData;
        if (getData) {
            let requestParam = "";
            for (let key in getData) {
                requestParam += (requestParam != "") ? ("&" + key + "=" + getData[key]) : ("?" + key + "=" + getData[key]);
            }
            url += requestParam;
        }
        return url;
    }
    buildFormData(formData,postData,parentKey=""){
        if(typeof postData!=="undefined"){
            if (postData=== Object(postData)) {
                for (let key in postData) {
                    if(postData[key] instanceof File)
                        formData.append(key, postData[key]);
                    else
                        this.buildFormData(formData,postData[key],parentKey ? `${parentKey}[${key}]` : key)
                }
            }else{
                formData.append(parentKey, postData);
            }
        }
    }
    setPostData(postData, type = 'form-data') {
        this.postData = postData;
        if (type == 'form-data') { 
           this.postData=new FormData();

           this.buildFormData( this.postData,postData);
        }
        return this;
    }
    setGetData(getData) {
        this.getData = getData;
        return this;
    }
    setHeaders(key, value) {
        this.headers[key] = value;
    }
    onSuccess(fn,...args){
        this.successCallback={
            fn:fn,
            args:args
        };
         return this;
    }
    onFailure(fn,...args){
        this.failureCallback={
            fn:fn,
            args:args
        };
        return this;
    }
    doSynchronousRequest(options){
        const abortController = new AbortController();
        options.mode='same-origin';
        options.cache='no-cache';
        options.credentials='same-origin';
        options.signal=abortController.signal;
        options.headers=this.headers;
        fetch(this.getUrl(), options).then(response => response.json()).then((response) => {
            this.successCallback["fn"](response,...this.successCallback.args);
        }).catch((error) => {
            if(error.name!=="AbortError")
                this.failureCallback["fn"]({head:{ status: false, message: error }},...this.failureCallback.args);
        });
        this.abortController=abortController;
    }
    doSynchronousPostRequest() {
        this.doSynchronousRequest({ method: 'POST',body: this.postData });
    }
    doSynchronousPatchRequest() {
        this.doSynchronousRequest({ method: 'PATCH',body: this.postData });
    }
    doSynchronousGetRequest() {
        this.doSynchronousRequest({ method: 'GET'});
    }
    async doRequest(options){
        options.mode='same-origin';
        options.cache='no-cache';
        options.credentials='same-origin';
        options.headers=this.headers;
        return await fetch(this.getUrl(), options)
            .then(response => response.json())
            .then((response) => {
                return response;
            }).catch((error) => {
                return {head:{ status: false, message: error }}
            });
    }
    async doPostRequest() {
        return await this.doRequest({ method: 'POST',body: this.postData });
    }
    async doPatchRequest() {
        return await this.doRequest({ method: 'PATCH',body: this.postData });
    }
    async doGetRequest() {
        return await this.doRequest({ method: 'GET'});
    }
    abortRequest(){
        if(this.abortController!=null){
            this.abortController.abort();
        }
    }
    handleFailure(response){
         console.log(response);
        const crAlert = new CrAlert;
        crAlert.setTypeDanger().show("Sorry! some technical error, Please try after sometime.");
    }
    isValidResponse(response){
        return response instanceof Object && response.hasOwnProperty('head') && response.head.hasOwnProperty('status');
    }
    handleResponseError(response){
        if (response.head.status === true) {return true ;}
        const crAlert = new CrAlert;
        crAlert.setTypeDanger();
        if (response.head.status === false && response.head.code===401)
            crAlert.setButtonAttributes({text:"Login Again",action:()=>{
                window.location.href=`${BASE_URL}users/logout`;
           }});
        crAlert.show(response.head.message);
        return false ;
    }
    
}