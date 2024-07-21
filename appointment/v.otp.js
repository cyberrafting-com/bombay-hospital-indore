export default {
    props: {
        size: {
            default: 4
        },
        type: {
            type: String,
            default: "text"
        },
    },
    data() {
        return {
            inputSize:4,
            otp:"",
        }
    },
    beforeMount() {

    }, mounted() {
       this.inputSize=parseInt(this.size);
    }, methods: {
        handleKeyup(event) {
            event.target.value=event.target?.value.trim();
            let nextTabIndex=-2;
            let key = event.keyCode || event.charCode;
            if( key == 8 ){
                nextTabIndex=event.target.tabIndex-1;
            }else{
                nextTabIndex=event.target.tabIndex+1;
            }
            let nextEl=document.querySelector(`input[tabindex='${nextTabIndex}']`);
            if(nextEl){
                if(nextTabIndex<=event.target.tabIndex || (nextTabIndex>event.target.tabIndex && event.target.value))
                    nextEl.focus();
            }
            this.handleInput();
        },
        handlePaste(event){
            let text=event.clipboardData.getData('text');
            if(text){
                text=text.replace(/[^a-z0-9]/gi, '');
                let textSize=text.length;
                for (let index=event.target.tabIndex; index <= textSize; index++) {
                    if(index<=this.inputSize) {
                        let currentEl = document.querySelector(`input[tabindex='${index}']`);
                        if (currentEl) {
                            currentEl.value = text[index - 1];
                        }
                    }
                }
                if(textSize>0 && textSize<this.inputSize){
                    let nextEl=document.querySelector(`input[tabindex='${textSize+1}']`);
                    if(nextEl){
                        nextEl.focus();
                    }
                }
                this.handleInput();
            }
        },
        handleInput(event){
            this.otp="";
            for(let index=1; index<=this.inputSize;index++){
                let el=document.querySelector(`input[tabindex='${index}']`);
				
                if(el){
                    el.value=el.value.replace(/[^a-z0-9]/gi, '').toString();
                    el.value=el.value.slice(-1);
                    this.otp += el.value;
                }
            }
            console.log(this.otp);
            this.$emit('update:otp', this.otp);
        },
		setEmpty(){
			 this.otp="";
			 console.log("setEmpty");
			 for(let index=1; index<=this.inputSize;index++){
				 let el=document.querySelector(`input[tabindex='${index}']`);
                 console.log(index,el);
               if(el){
                    el.value='';
				      console.log(index,el.value);
              
                }
             }
			 this.$emit('update:otp', this.otp);
		}
    },
    template: `
    <div class="d-flex align-items-center mt-2">
        <div class="otp-input flex-grow-1">
           <input class="form-control" autocomplete='off' :type="type" maxlength="1" :tabindex="index"  @paste.prevent="handlePaste" @keyup.prevent="handleKeyup"  v-for="index in inputSize" :key="index"/>
        </div>
    </div>
      
    `,
};

