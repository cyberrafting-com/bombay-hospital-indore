<!doctype html>
<html lang="en">
<head>
	   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <?php include "includes/head.php"; ?>
    <script>
        const BASE_URL = "https://bombayhospitalindore.com/appointment";
    </script>
	
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.10"></script>
    <script src="https://cdn.jsdelivr.net/npm/vee-validate@<3.0.0/dist/vee-validate.js"></script>
    <script src="cr.alert.js"></script>
    <script src="cr.loader.js"></script>
    <script src="cr.fetch.js"></script>
    <style>

        .otp-input.flex-grow-1 {
            display: inline-flex;
            gap: 0px;
            margin-bottom: 1rem;
            margin-top: 1rem;
        }

        .otp-input.flex-grow-1 input.form-control {
            padding: 0.675rem 0;
            text-align: center;
            font-weight: 700;
        }
		
        [v-cloak]{
            display:none;
        }
    </style>
</head>

<body class="home page page-id-42 page-template-default custom-background single-author openstrap-custom-background">
    <?php include "includes/header.php"; ?>
	
	
	
	
	
<!-- start Form -->
<section class="sec-form" id="app" v-cloak>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">

                <form @submit.prevent="onSubmit" novalidate>
                    <fieldset>
                        <legend>Book an appointment</legend>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control"
                                   id="name" name="name"
                                   v-validate="'required|min:2|alpha_spaces|max:100'"
                                   data-vv-as="name"
                                   v-model.trim="formFields.name"
                                   placeholder="Name">
                            <label for="name">Name</label>
                            <div class="text-danger" v-if="errors.has('name')">{{errors.first('name')}}</div>
                        </div>
                        <div class="form-floating mt-3">
                           <input type="text" class="form-control" id="email" name="email"
                                   v-validate="'required|email|max:100'"
                                   data-vv-as="email"
                                   v-model.trim="formFields.email"
                                   placeholder="Email">
                            <label for="email">Email</label>
                             <div class="text-danger" v-if="errors.has('email')">{{errors.first('email')}}</div>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                   v-validate="'required|numeric|digits:10'"
                                   data-vv-as="mobile"
                                   v-model.trim="formFields.mobile" placeholder="Mobile">
                            <label for="mobile">Mobile</label>
                            <div class="text-danger" v-if="errors.has('mobile')">{{errors.first('mobile')}}</div>
                        </div>
						<div class="form-floating mt-3">
                            <select class="form-select" id="department_id" name="department_id"
                                    v-validate=""
                                    data-vv-as="department"
                                    v-model="formFields.department_id"
                                    @change="onDepartmentChange()"
									
                                    >
                                <option selected value="">Choose...</option>
                                <option v-for="(department,index) in departments" :value="department.id"
                                        :key="department.name+index">{{department.name}}
                                </option>
                            </select>
                           <label for="department_id">Department (Optional)</label>
                             <div class="text-danger" v-if="errors.has('department_id')">
                                {{errors.first('department_id')}}
                            </div>
                        </div>
						<div class="form-floating mt-3">
                            <select class="form-select" id="doctor_id" name="doctor_id"
                                    data-vv-as="doctor"
                                    v-model="formFields.doctor_id"
                                    @change="onDoctorChange()">
                                <option selected value="">Choose...</option>
                                <option v-for="(doctor,index) in doctors" :value="doctor.id" :key="doctor.name+index" v-if="!formFields.department_name || doctor.department==formFields.department_name">
                                   Dr. {{doctor.name}} ({{doctor.department}})
                                </option>
                            </select>
                            <label for="doctor_id">Doctor (Optional)</label>
                            <div class="text-danger" v-if="errors.has('doctor_id')">{{errors.first('doctor_id')}}</div>
                        </div>
                       
                        <div class="form-floating mt-3">
                            <input type="date" class="form-control" name="appointment_date" ref="refAppointmentDate"
                                   v-validate="'required'"
                                   data-vv-as="appointment date"
                                   v-model.trim="formFields.appointment_date" min="<?= date("Y-m-d"); ?>"
                                   value="<?= date("Y-m-d"); ?>"
                                   pattern="\d{4}-\d{2}-\d{2}" @input="daysToDisable"
                                   id="appointment_date" placeholder="Appointment Date" onkeydown="return false">
                            <label for="appointment_date">Choose Appointment Date</label>
                            <div class="text-danger" v-if="errors.has('appointment_date')">
                                {{errors.first('appointment_date')}}
                            </div>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" name="message" placeholder="Leave a message here"
                                      id="message"
                                      v-validate="'required|min:5|max:4096'"
                                      data-vv-as="message"
                                      v-model="formFields.message" style="height: 100px"></textarea>
                           <label for="message">Message</label>
                             <div class="text-danger" v-if="errors.has('message')">{{errors.first('message')}}</div>
                        </div>
                        <button type="submit" class="btn px-4 fs-6 btn-outline-danger ms-auto mt-3"
                                :disabled="errors.any()">Submit
                        </button>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" :id="modalElId" :aria-labelledby="modalElId+'Label'" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body pt-3 text-center">
                    <strong class="mt-3">Enter OTP sent on your mobile ({{formFields.mobile}}).</strong>
                    <v-otp v-bind:otp.sync="formFields.otp" ref='refOTP' size="6"></v-otp>
                        <a href="javascript:;" @click="sendSecureCode(true)">Resend OTP</a>
                    <br/>
					<a href="javascript:" class="btn btn-info" @click="onVerify()">Verify</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="module">

    Vue.use(VeeValidate, {inject: true});
    import VOtp from "./v.otp.js";

    new Vue({
        el: "#app",
        data: () => {
            return {
                formFields: {
                    name: '',
                    email: '',
                    mobile: '',
                    appointment_date: '',
                    department_id: '',
                    department_name: '',
                    doctor_id: '',
                    doctor_name: '',
                    doctor_email: '',
                    doctor_mobile: '',
                    message: '',
                    otp: '',
                },
                isMobileVerified: false,
                modalElId: null,
                modalInstance: null,
                doctors: [],
                departments: [],
				otp_error:"",
            }
        },
        components: {
            'v-otp': VOtp
        },
        mounted() {
            this.modalElId = "modalOTP" + Math.floor(Math.random() * 100000);
            this.fetchDoctors();
        },
        methods: {
			daysToDisable: function(event) {
                const selectedDate = new Date(event.target.value);
                const dayOfWeek = selectedDate.getDay();
                if (dayOfWeek === 0) {
                  this.formFields.appointment_date= "";
					let crAlert = new CrAlert;
                     crAlert.setTypeInfo().show("Appointments are not permitted on Sundays.");
					return false;
                 // this.errors.add({ field: 'appointment_date',rule: 'required', msg: "Appointments are not permitted on Sundays." });
                }
                const date = `${selectedDate.getFullYear()}-${(selectedDate.getMonth() + 1).toString().padStart(2, '0')}-${selectedDate.getDate().toString().padStart(2, '0')}`;

const holidays={
    "2023-08-15":"Appointments are not allowed on August 15th.",
    "2023-09-19":"Appointments are not allowed on Ganesh Chaturthi.",
    "2023-10-24":"Appointments are not allowed on Dussehra.",
    "2023-11-15":"Appointments are not allowed on Bhau Beej.",
    "2023-12-25":"Appointments are not allowed on Christmas."
};
                if (holidays?.[date]) {
                   this.formFields.appointment_date= "";
					let crAlert = new CrAlert;
                     crAlert.setTypeInfo().show(holidays[date]);
					
					return false;
                  //this.errors.add({ field: 'appointment_date', msg: holidays[date] });
                }
            },
            show: function () {
                this.modalInstance = new bootstrap.Modal(document.getElementById(this.modalElId), {
                    keyboard: false, backdrop: "static",
                });
                this.modalInstance.show();
				if(this.refs?.refOTP)
				  this.refs.refOTP.setEmpty();
               this.otp_error="";
            },
            
            hide: function () {
				 this.modalInstance.hide();
                this.modalInstance = null;
            },
            onDepartmentChange: function () {
               /* this.$set(this.formFields, 'doctor_id',"");
                this.$set(this.formFields, 'doctor_name',"");
                this.$set(this.formFields, 'doctor_email',"");
                this.$set(this.formFields, 'doctor_mobile',"");*/
                let department=this.formFields.department_id;
                const dindex=  this.departments.findIndex((element) => element.id === department);
                if(dindex!==-1){
                    this.$set(this.formFields, 'department_name',this.departments[dindex].name);
                }else{
					    this.$set(this.formFields, 'department_name','');
				}
            },
            onDoctorChange:function () {
				let dateWithWaitTime= this.getDateWithWaitTime(0);
                if(this.formFields.doctor_id){
                    //this.$set(this.formFields, 'department_id', '');
                    //this.$set(this.formFields, 'department_name', '');
                    let doctor=this.formFields.doctor_id;
                    const cindex=  this.doctors.findIndex((element) => element.id === doctor);
                    if(cindex!==-1){
						 dateWithWaitTime= this.getDateWithWaitTime(this.doctors[cindex].waiting_time_in_days);
                     
                        this.$set(this.formFields, 'doctor_name',this.doctors[cindex].name);
                        this.$set(this.formFields, 'doctor_email',this.doctors[cindex].email);
                        this.$set(this.formFields, 'doctor_mobile',this.doctors[cindex].mobile);
                       /* let department=this.doctors[cindex].department;
                        const dindex=  this.departments.findIndex((element) => element.name === department);
    
                        if(dindex!==-1){
                            this.$set(this.formFields, 'department_id',this.departments[dindex].id);
                            this.$set(this.formFields, 'department_name',this.departments[dindex].name);
                        }
                            */
                    }else{
					    this.$set(this.formFields, 'doctor_name','');
                        this.$set(this.formFields, 'doctor_email','');
                        this.$set(this.formFields, 'doctor_mobile','');
                       
				   }
                }
				this.$refs.refAppointmentDate.setAttribute("min", dateWithWaitTime);
                this.$refs.refAppointmentDate.setAttribute("value", dateWithWaitTime);
            },
			getDateWithWaitTime(waiting_time_in_days){
                let currentDate = new Date();
                currentDate.setDate(currentDate.getDate() + Number(waiting_time_in_days));
                return currentDate.toISOString().slice(0,10);
            },
            fetchDoctors: function () {
                let crLoader = new CrLoader;
                crLoader.show("loading...");
                let self = this;
                let crFetch = new CrFetch;
                // this.formFields.otp=this.otp;
                crFetch.setUrl(`${BASE_URL}/booking.php?fetch=doctor`)
                    .onSuccess((response) => {
                        crLoader.hide();
                        if (response.status === true) {
                            this.doctors=response.doctors;
                            this.departments=response.departments;
                        } 
                    })
                    .onFailure((response) => {
                        crLoader.hide();
                    })
                    .doSynchronousGetRequest();
            },
            resetForm: function () {
                this.formFields={
                        name: '',
                        email: '',
                        mobile: '',
                        appointment_date: '',
                        department_id: '',
                        department_name: '',
                        doctor_id: '',
                        doctor_name: '',
                        doctor_email: '',
                        doctor_mobile: '',
                        message: '',
                        otp: '',
                };
                this.$set(this.formFields,'otp','');
				this.$validator.pause();
                this.$nextTick(() => {
                    this.$validator.errors.clear();
                    this.$validator.fields.items.forEach(field => field.reset());
                    this.$validator.fields.items.forEach(field => this.errors.remove(field));
                    this.$validator.resume();
                })
            },
            onVerify() {
				let crLoader = new CrLoader;
                crLoader.show("Verifing...");
                let self = this;
                let crFetch = new CrFetch;
                // this.formFields.otp=this.otp;
               
                        
                crFetch.setUrl(`${BASE_URL}/booking.php?appointment=doctor`)
                    .setPostData(this.formFields)
                    .onSuccess((response) => {
					 
                        crLoader.hide();
                      
					  if (response.status === true) {
						    self.hide();
                            let crAlert = new CrAlert;
                            crAlert.setTypeSuccess().show(response.message);
							self.resetForm();
						  
                        } else {
                             self.$set(self.formFields,'otp','');
							 
							 let crAlert = new CrAlert;
                             crAlert.setTypeDanger().show(response.message);
                        }
					
                    })
                    .onFailure((response) => {
                      	  console.log(response);
                 crLoader.hide();
                    })
                    .doSynchronousPostRequest();
            },
            sendSecureCode(resend=false) {
                let crLoader = new CrLoader;
				if(resend===true)
                	crLoader.show("Sending OTP once again...");
                else
					crLoader.show("Please hold on! Validating your mobile number...");
               
				let self = this;
                // setTimeout(function () {
                //     self.show();
                //     crLoader.hide();
                // }, 2000);
 				//this.$set(this.formFields,'otp','');
               
                let crFetch = new CrFetch;
                crFetch.setUrl(`${BASE_URL}/otp.php`)
                    .setPostData(this.formFields)
                    .onSuccess((response) => {
                        crLoader.hide();
                        if (response.status === true) {
                            self.show();
                        } else {
                            let crAlert = new CrAlert;
                            crAlert.setTypeDanger().show(response.message);
                        }

                    })
                    .onFailure((response) => {
                        crLoader.hide();
                    })
                    .doSynchronousPostRequest();
            },

            onSubmit: function () {
                this.$validator.validateAll().then((isValid) => {
                    if (isValid) {
                        if (this.isMobileVerified === false) {
                            this.sendSecureCode();
                        }
                    }
                });
            }
        }
    })
</script>

    <?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
<!--<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>
