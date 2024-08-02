<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/clear',function(){
        //\Artisan::call('key:generate');
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
    });

    // Route::get('/login', function () {
    //     return view('login');
    // });
    

    //  Admin Login 

    // Route::get('/login', [AdminController::class, 'loginForm'])->name('login');
    // Route::post('/admin_login', [AdminController::class, 'loginData'])->name('admin_login');
    // Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    // Route::get('/view-data', [AdminController::class, 'viewData'])->name('viewdata');
    // Route::get('/view-details/{id}', [AdminController::class, 'viewDetails'])->name('viewDetails');
    // Route::get('/view-data/form/{form_name}', [AdminController::class, 'viewDataByForm'])->name('viewDataByForm');




    // Public routes (accessible without authentication)
       Route::get('/admin', [AdminController::class, 'loginForm'])->name('login');
       Route::post('/admin_login', [AdminController::class, 'loginData'])->name('admin_login');

// Protected routes (accessible only by authenticated users)

    Route::middleware(['auth'])->group(function () {
            Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
            Route::get('/view-data', [AdminController::class, 'viewData'])->name('viewdata');
            Route::get('/view-details/{id}', [AdminController::class, 'viewDetails'])->name('viewDetails');
            Route::get('/view-data/form/{form_name}', [AdminController::class, 'viewDataByForm'])->name('viewDataByForm');
});


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/transplant-facilities', function () {
    return view('transplant-facilities');
})->name('transplant-facilities');

Route::get('/executive-checkup-scheme', function () {
    return view('ehs');
})->name('ehs');

Route::get('/photo-gallery', function () {
    return view('photo-gallery');
})->name('photo-gallery');

Route::get('/downloads', function () {
    return view('downloads');
})->name('downloads');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/patient-stories', function () {
    return view('patient-stories');
})->name('patient-stories');

Route::get('/stents-pricing', function () {
    return view('stents-pricing');
})->name('stents-pricing');

Route::get('/about/founders', function () {
    return view('founders');
})->name('founders');

Route::get('/about/history', function () {
    return view('history');
})->name('history');

Route::get('/about/hospital-location', function () {
    return view('hospital-location');
})->name('hospital-location');

Route::get('/about/management-board', function () {
    return view('management-board');
})->name('management-board');

Route::get('/about/vision-mission', function () {
    return view('vision-mission');
})->name('vision-mission');

Route::get('/about/philosophy', function () {
    return view('philosophy');
})->name('philosophy');

Route::get('/services/diagnostic/blood-transfusion-service', function () {
    return view('blood-transfusion-service');
})->name('blood-transfusion-service');

Route::get('/services/diagnostic/cath-lab', function () {
    return view('cath-lab');
})->name('cath-lab');

Route::get('/services/diagnostic/ecg', function () {
    return view('ecg');
})->name('ecg');

Route::get('/services/diagnostic/eeg', function () {
    return view('eeg');
})->name('eeg');

Route::get('/services/diagnostic/histopathology', function () {
    return view('histopathology');
})->name('histopathology');

Route::get('/services/diagnostic/mri', function () {
    return view('mri');
})->name('mri');

Route::get('/services/diagnostic/pathology', function () {
    return view('pathology');
})->name('pathology');

Route::get('/services/diagnostic/pulmonary-function-lab', function () {
    return view('pulmonary-function-lab');
})->name('pulmonary-function-lab');

Route::get('/services/diagnostic/ultrasound', function () {
    return view('ultrasound');
})->name('ultrasound');

Route::get('/services/diagnostic/xray', function () {
    return view('xray');
})->name('xray');

Route::get('/services/medical/cardiology', function () {
    return view('cardiology');
})->name('cardiology');

Route::get('/services/medical/chest-medicine', function () {
    return view('chest-medicine');
})->name('chest-medicine');

Route::get('/services/medical/gastroentrology', function () {
    return view('gastroentrology');
})->name('gastroentrology');

Route::get('/services/medical/general-medicine', function () {
    return view('general-medicine');
})->name('general-medicine');

Route::get('/services/medical/neonatology', function () {
    return view('neonatology');
})->name('neonatology');

Route::get('/services/medical/nephrology', function () {
    return view('nephrology');
})->name('nephrology');

Route::get('/services/medical/neurology', function () {
    return view('neurology');
})->name('neurology');

Route::get('/services/medical/oncology', function () {
    return view('oncology');
})->name('oncology');

Route::get('/services/medical/paediatrics', function () {
    return view('paediatrics');
})->name('paediatrics');

Route::get('/services/round-the-clock/admission', function () {
    return view('admission');
})->name('admission');

Route::get('/services/round-the-clock/ecg-xray', function () {
    return view('ecg-xray');
})->name('ecg-xray');

Route::get('/services/round-the-clock/emergency-and-casualty', function () {
    return view('emergency');
})->name('emergency');

Route::get('/services/round-the-clock/path-lab', function () {
    return view('path-lab');
})->name('path-lab');

Route::get('/services/round-the-clock/pharmacy', function () {
    return view('pharmacy');
})->name('pharmacy');

Route::get('/services/health-library/health-tips', function () {
    return view('health-tips');
})->name('health-tips');

Route::get('/services/health-library/health-education', function () {
    return view('health-education');
})->name('health-education');

Route::get('/services/health-library/tests-procedures', function () {
    return view('tests-procedures');
})->name('tests-procedures');

Route::get('/services/surgical/cardiovascular-thoracic-surgery', function () {
    return view('cardiovascular-thoracic-surgery');
})->name('cardiovascular-thoracic-surgery');

Route::get('/services/surgical/ent', function () {
    return view('ent');
})->name('ent');

Route::get('/services/surgical/general-surgery', function () {
    return view('general-surgery');
})->name('general-surgery');

Route::get('/services/surgical/kidney-transplant', function () {
    return view('kidney-transplant');
})->name('kidney-transplant');

Route::get('/services/surgical/gastrointestinal-laproscopic-and-hepato-pancreatico-biliary-surgery', function () {
    return view('gastrointestinal-surgery');
})->name('gastrointestinal-surgery');

Route::get('/services/surgical/neurosurgery', function () {
    return view('neurosurgery');
})->name('neurosurgery');

Route::get('/services/surgical/obstetrics', function () {
    return view('obstetrics');
})->name('obstetrics');

Route::get('/services/surgical/ophthalmology', function () {
    return view('ophthalmology');
})->name('ophthalmology');

Route::get('/services/surgical/orthopaedics', function () {
    return view('orthopaedics');
})->name('orthopaedics');

Route::get('/services/surgical/plastic-surgery', function () {
    return view('plastic-surgery');
})->name('plastic-surgery');

Route::get('/services/surgical/surgical-oncology', function () {
    return view('surgical-oncology');
})->name('surgical-oncology');

Route::get('/services/surgical/urology', function () {
    return view('urology');
})->name('urology');

Route::get('/services/therapeutic/dialysis', function () {
    return view('dialysis');
})->name('dialysis');

Route::get('/services/therapeutic/dietician-and-nutrition-clinic', function () {
    return view('dietician');
})->name('dietician');

Route::get('/services/therapeutic/doctor-scorecard', function () {
    return view('doctor-scorecard');
})->name('doctor-scorecard');

Route::get('/services/therapeutic/lithotripsy', function () {
    return view('lithotripsy');
})->name('lithotripsy');

Route::get('/services/therapeutic/physiotherapy', function () {
    return view('physiotherapy');
})->name('physiotherapy');

Route::get('/in-patient-guide/admission-procedures', function () {
    return view('admission-procedures');
})->name('admission-procedures');

Route::get('/in-patient-guide/billing', function () {
    return view('billing');
})->name('billing');

Route::get('/in-patient-guide/insurance-and-mediclaim', function () {
    return view('insurance');
})->name('insurance');

Route::get('/in-patient-guide/important-telephone-numbers', function () {
    return view('imp-telephone');
})->name('imp-telephone');

Route::get('/in-patient-guide/meals', function () {
    return view('meals');
})->name('meals');

Route::get('/in-patient-guide/room-facilities', function () {
    return view('room-facilities');
})->name('room-facilities');

Route::get('/in-patient-guide/visiting-hours', function () {
    return view('visiting-hours');
})->name('visiting-hours');

Route::get('/why-bombay-hospital', function () {
    return view('why-bombay-hospital');
})->name('why-bombay-hospital');

Route::get('/panel-of-consultants', function () {
    return view('panel-of-consultants');
})->name('panel-of-consultants');

Route::get('/feedback-suggestions', function () {
    return view('feedback');
})->name('feedback');

Route::get('/bmw', function () {
    return view('bmw');
})->name('bmw');

Route::get('/vacancies', function () {
    return view('vacancies');
})->name('vacancies');

Route::get('/health-education/neurology-neurosurgery/anatomy-of-brain', function () {
    return view('anatomy-brain');
})->name('anatomy-brain');

Route::get('/book-appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('/health-education/cardiology/basic-anatomy-of-heart', function () {
    return view('basic-anatomy-of-heart');
})->name('basic-anatomy-of-heart');

Route::get('/cardiac-health-checkup', function () {
    return view('cardiac-checkup');
})->name('cardiac-checkup');

Route::get('/health-education/cardiology/cardiac-conditions', function () {
    return view('cardiac-conditions');
})->name('cardiac-conditions');

Route::get('/health-education/cardiology/cardiac-diagnostic-tests', function () {
    return view('cardiac-diagnostic-tests');
})->name('cardiac-diagnostic-tests');

Route::get('/health-education/cardiology/cardiac-procedures', function () {
    return view('cardiac-procedures');
})->name('cardiac-procedures');

Route::get('/health-education/cardiology/cardiac-rehabilitation', function () {
    return view('cardiac-rehabilitation');
})->name('cardiac-rehabilitation');

Route::get('/health-education/orthopedics/common-ortho-disorders', function () {
    return view('common-ortho-disorders');
})->name('common-ortho-disorders');

Route::get('/comprehensive-health-checkup', function () {
    return view('comprehensive-checkup');
})->name('comprehensive-checkup');

Route::get('/health-education/cardiology/coronary-arteries', function () {
    return view('coronary-arteries');
})->name('coronary-arteries');

Route::get('/diabetic-health-checkup', function () {
    return view('diabetic-checkup');
})->name('diabetic-checkup');

Route::get('/health-education/neurology-neurosurgery/diagnostic-tests', function () {
    return view('diagnostic-tests');
})->name('diagnostic-tests');

Route::get('/panel-of-consultants/dr-abhinav-anand', function () {
    return view('dr-abhinav-anand');
})->name('dr-abhinav-anand');

Route::get('/panel-of-consultants/dr-abhimanyu-nigam', function () {
    return view('dr-abhimanyu-nigam');
})->name('dr-abhimanyu-nigam');

Route::get('/panel-of-consultants/dr-sunil-kumar-dube', function () {
    return view('dr-sunil-kumar-dube');
})->name('dr-sunil-kumar-dube');

Route::get('/panel-of-consultants/dr-tripti-sonker', function () {
    return view('dr-tripti-sonker');
})->name('dr-tripti-sonker');

Route::get('/panel-of-consultants/dr-aditi-jain', function () {
    return view('dr-aditi-jain');
})->name('dr-aditi-jain');

Route::get('/panel-of-consultants/dr-kiran-chouhan', function () {
    return view('dr-kiran-chouhan');
})->name('dr-kiran-chouhan');

Route::get('/panel-of-consultants/dr-alok-mandliya', function () {
    return view('dr-alok-mandliya');
})->name('dr-alok-mandliya');

Route::get('/panel-of-consultants/dr-anand-gupta', function () {
    return view('dr-anand-gupta');
})->name('dr-anand-gupta');

Route::get('/panel-of-consultants/dr-anil-gwaliorkar', function () {
    return view('dr-anil-gwaliorkar');
})->name('dr-anil-gwaliorkar');

Route::get('/panel-of-consultants/dr-ankit-gupta', function () {
    return view('dr-ankit-gupta');
})->name('dr-ankit-gupta');

Route::get('/panel-of-consultants/dr-ashish-dwivedi', function () {
    return view('dr-ashish-dwivedi');
})->name('dr-ashish-dwivedi');

Route::get('/panel-of-consultants/dr-ashutosh-soni', function () {
    return view('dr-ashutosh-soni');
})->name('dr-ashutosh-soni');

Route::get('/panel-of-consultants/dr-atul-taparia', function () {
    return view('dr-atul-taparia');
})->name('dr-atul-taparia');

Route::get('/panel-of-consultants/dr-avinash-jain', function () {
    return view('dr-avinash-jain');
})->name('dr-avinash-jain');

Route::get('/panel-of-consultants/dr-aviral-jain', function () {
    return view('dr-aviral-jain');
})->name('dr-aviral-jain');

Route::get('/panel-of-consultants/dr-charu-neema', function () {
    return view('dr-charu-neema');
})->name('dr-charu-neema');

Route::get('/panel-of-consultants/dr-deepak-bansal', function () {
    return view('dr-deepak-bansal');
})->name('dr-deepak-bansal');

Route::get('/panel-of-consultants/dr-devendra-patil', function () {
    return view('dr-devendra-patil');
})->name('dr-devendra-patil');

Route::get('/panel-of-consultants/dr-govind-gourh', function () {
    return view('dr-govind-gourh');
})->name('dr-govind-gourh');

Route::get('/panel-of-consultants/dr-idris-ahmed-khan', function () {
    return view('dr-idris-ahmed-khan');
})->name('dr-idris-ahmed-khan');

Route::get('/panel-of-consultants/dr-kamal-lashkari', function () {
    return view('dr-kamal-lashkari');
})->name('dr-kamal-lashkari');

Route::get('/panel-of-consultants/dr-kashish-ahuja', function () {
    return view('dr-kashish-ahuja');
})->name('dr-kashish-ahuja');

Route::get('/panel-of-consultants/dr-kaushalendra-soni', function () {
    return view('dr-kaushalendra-soni');
})->name('dr-kaushalendra-soni');

Route::get('/panel-of-consultants/dr-kavita-ghadale', function () {
    return view('dr-kavita-ghadale');
})->name('dr-kavita-ghadale');

Route::get('/panel-of-consultants/dr-mahendra-gupta', function () {
    return view('dr-mahendra-gupta');
})->name('dr-mahendra-gupta');

Route::get('/panel-of-consultants/dr-manish-jain', function () {
    return view('dr-manish-jain');
})->name('dr-manish-jain');

Route::get('/panel-of-consultants/dr-mukesh-gupta', function () {
    return view('dr-mukesh-gupta');
})->name('dr-mukesh-gupta');

Route::get('/panel-of-consultants/dr-mukesh-modh', function () {
    return view('dr-mukesh-modh');
})->name('dr-mukesh-modh');

Route::get('/panel-of-consultants/dr-nilam-bharihok', function () {
    return view('dr-neelam-bharihoke');
})->name('dr-neelam-bharihoke');

Route::get('/panel-of-consultants/dr-nikita-khandelwal', function () {
    return view('dr-nikita-khandelwal');
})->name('dr-nikita-khandelwal');

Route::get('/panel-of-consultants/dr-nupoor-acharya', function () {
    return view('dr-nupoor-acharya');
})->name('dr-nupoor-acharya');

Route::get('/panel-of-consultants/dr-omprakash-rathi', function () {
    return view('dr-omprakash-rathi');
})->name('dr-omprakash-rathi');

Route::get('/panel-of-consultants/dr-piyush-vyas', function () {
    return view('dr-piyush-vyas');
})->name('dr-piyush-vyas');

Route::get('/panel-of-consultants/dr-praveen-singh', function () {
    return view('dr-praveen-singh');
})->name('dr-praveen-singh');

Route::get('/panel-of-consultants/dr-pritesh-shrimali', function () {
    return view('dr-pritesh-shrimali');
})->name('dr-pritesh-shrimali');

Route::get('/panel-of-consultants/dr-rajesh-bharani', function () {
    return view('dr-rajesh-bharani');
})->name('dr-rajesh-bharani');

Route::get('/panel-of-consultants/dr-rajesh-gujrati', function () {
    return view('dr-rajesh-gujrati');
})->name('dr-rajesh-gujrati');

Route::get('/panel-of-consultants/dr-rakesh-shukla', function () {
    return view('dr-rakesh-shukla');
})->name('dr-rakesh-shukla');

Route::get('/panel-of-consultants/dr-rashid-hasan', function () {
    return view('dr-rashid-hasan');
})->name('dr-rashid-hasan');

Route::get('/panel-of-consultants/dr-ravi-rathi', function () {
    return view('dr-ravi-rathi');
})->name('dr-ravi-rathi');

Route::get('/panel-of-consultants/dr-prakash-chand-madiya', function () {
    return view('dr-prakash-chand-madiya');
})->name('dr-prakash-chand-madiya');

Route::get('/panel-of-consultants/dr-sandeep-rathore', function () {
    return view('dr-sandeep-rathore');
})->name('dr-sandeep-rathore');

Route::get('/panel-of-consultants/dr-sanjeev-asati', function () {
    return view('dr-sanjeev-asati');
})->name('dr-sanjeev-asati');

Route::get('/panel-of-consultants/dr-santosh-ahuja', function () {
    return view('dr-santosh-ahuja');
})->name('dr-santosh-ahuja');

Route::get('/panel-of-consultants/dr-shailendra-rai', function () {
    return view('dr-shailendra-rai');
})->name('dr-shailendra-rai');

Route::get('/panel-of-consultants/dr-shashank-singh', function () {
    return view('dr-shashank-singh');
})->name('dr-shashank-singh');

Route::get('/panel-of-consultants/dr-shitanshu-dube', function () {
    return view('dr-shitanshu-dube');
})->name('dr-shitanshu-dube');

Route::get('/panel-of-consultants/dr-soni-rungta', function () {
    return view('dr-soni-rungta');
})->name('dr-soni-rungta');

Route::get('/panel-of-consultants/dr-sonia-daga', function () {
    return view('dr-sonia-daga');
})->name('dr-sonia-daga');

Route::get('/panel-of-consultants/dr-suyash-agrawal', function () {
    return view('dr-suyash-agrawal');
})->name('dr-suyash-agrawal');

Route::get('/panel-of-consultants/dr-varun-chouhan', function () {
    return view('dr-varun-chouhan');
})->name('dr-varun-chouhan');

Route::get('/panel-of-consultants/dr-vipin-sharma', function () {
    return view('dr-vipin-sharma');
})->name('dr-vipin-sharma');

Route::get('/panel-of-consultants/dr-vivek-jha', function () {
    return view('dr-vivek-jha');
})->name('dr-vivek-jha');

Route::get('/panel-of-consultants/dr-vivek-sullere', function () {
    return view('dr-vivek-sullere');
})->name('dr-vivek-sullere');

Route::get('/panel-of-consultants/dr-yogesh-kumar-tatwade', function () {
    return view('dr-yogesh-kumar-tatwade');
})->name('dr-yogesh-kumar-tatwade');

Route::get('/health-education/orthopedics/evaluation-procedures', function () {
    return view('evaluation-procedures');
})->name('evaluation-procedures');

Route::get('/health-education/gynecology-and-obstetrics/female-pelvic-area', function () {
    return view('female-pelvic-area');
})->name('female-pelvic-area');

Route::get('/health-education/gynecology-and-obstetrics/gynecologic-cancers', function () {
    return view('gynecologic-cancers');
})->name('gynecologic-cancers');

Route::get('/health-education/gynecology-and-obstetrics/gynecologic-conditions', function () {
    return view('gynecologic-conditions');
})->name('gynecologic-conditions');

Route::get('/health-education/gynecology-and-obstetrics/gynecologic-infections', function () {
    return view('gynecologic-infections');
})->name('gynecologic-infections');

Route::get('/health-education/cardiology/hearts-electrical-system', function () {
    return view('hearts-electrical-system');
})->name('hearts-electrical-system');

Route::get('/health-education/gynecology-and-obstetrics/hysterectomy', function () {
    return view('hysterectomy');
})->name('hysterectomy');

Route::get('/health-education/gynecology-and-obstetrics/general-information-about-cancer', function () {
    return view('info-about-cancer');
})->name('info-about-cancer');

Route::get('/health-education/gynecology-and-obstetrics/menopause', function () {
    return view('menopause');
})->name('menopause');

Route::get('/health-education/gynecology-and-obstetrics/menstrual-conditions', function () {
    return view('menstrual-conditions');
})->name('menstrual-conditions');

Route::get('/patient-stories/mr-amit', function () {
    return view('mr-amit');
})->name('mr-amit');

Route::get('/patient-stories/mr-arjun', function () {
    return view('mr-arjun');
})->name('mr-arjun');

Route::get('/patient-stories/mr-bherulal', function () {
    return view('mr-bherulal');
})->name('mr-bherulal');

Route::get('/patient-stories/mr-kantilal', function () {
    return view('mr-kantilal');
})->name('mr-kantilal');

Route::get('/patient-stories/mr-murlidhar', function () {
    return view('mr-murlidhar');
})->name('mr-murlidhar');

Route::get('/patient-stories/mr-yatindra', function () {
    return view('mr-yatindra');
})->name('mr-yatindra');

Route::get('/panel-of-consultants/mrs-aashna-jain', function () {
    return view('mrs-aashna-jain');
})->name('mrs-aashna-jain');

Route::get('/patient-stories/mrs-neena', function () {
    return view('mrs-neena');
})->name('mrs-neena');

Route::get('/patient-stories/mrs-parvati', function () {
    return view('mrs-parvati');
})->name('mrs-parvati');

Route::get('/patient-stories/mrs-yayati', function () {
    return view('mrs-yayati');
})->name('mrs-yayati');

Route::get('/health-education/neurology-neurosurgery/neurological-disorders', function () {
    return view('neurological-disorders');
})->name('neurological-disorders');

Route::get('/health-education/neurology-neurosurgery/neurological-examination', function () {
    return view('neurological-examination');
})->name('neurological-examination');

Route::get('/health-education/neurology-neurosurgery/overview-nervous-system', function () {
    return view('overview-nervous-system');
})->name('overview-nervous-system');

Route::get('/health-education/orthopedics/overview-ortho', function () {
    return view('overview-ortho');
})->name('overview-ortho');

Route::get('/paediatric-health-checkup', function () {
    return view('paediatric-checkup');
})->name('paediatric-checkup');

Route::get('/health-education/cardiology/preventing-cardiovascular', function () {
    return view('preventing-cardiovascular');
})->name('preventing-cardiovascular');

Route::get('/prostate-health-checkup', function () {
    return view('prostate-checkup');
})->name('prostate-checkup');

Route::get('/health-education/orthopedics/sports-injuries', function () {
    return view('sports-injuries');
})->name('sports-injuries');

Route::get('/standard-health-checkup', function () {
    return view('standard-checkup');
})->name('standard-checkup');

Route::get('/health-education/cardiology/statistics', function () {
    return view('statistics');
})->name('statistics');

Route::get('/health-education/cardiology/stroke', function () {
    return view('stroke');
})->name('stroke');

Route::get('/health-education/orthopedics/treatment-plans', function () {
    return view('treatment-plans');
})->name('treatment-plans');

Route::get('/health-education/cardiology/vascular-conditions', function () {
    return view('vascular-conditions');
})->name('vascular-conditions');

Route::get('/health-education/cardiology/vital-signs', function () {
    return view('vital-signs');
})->name('vital-signs');

Route::get('/health-education/cardiology/vital-signs', function () {
    return view('vital-signs');
})->name('vital-signs');


Route::get('/corporate-patients', function () {
    return view('corporate-patients');
})->name('corporate-patients');


Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/career/medical-administrator', function () {
    return view('medical-administrator');
})->name('medical-administrator');



// Insert data into DB below file

Route::get('/career/associate-consultant', [HospitalController::class , 'career'])->name('associate-consultant');
Route::post('store', [HospitalController::class,'store'])->name('store');


Route::get('/career/rmo', [HospitalController::class , 'rmoData'])->name('rmo');
Route::post('/rmoFrom', [HospitalController::class,'store'])->name('rmoFrom');


Route::get('/career/medical-administrator', [HospitalController::class , 'medicalAdministrator'])->name('medical-administrator');
Route::post('/administrator', [HospitalController::class,'store'])->name('administrator');


Route::get('/career/medical-oncologist', [HospitalController::class , 'medicalOncologist'])->name('medical-oncologist');
Route::post('/medical_oncologist', [HospitalController::class,'store'])->name('medical_oncologist');


Route::get('/career/surgical-oncologist', [HospitalController::class , 'surgicalOncologist'])->name('surgical-oncologist');
Route::post('/surgical-data', [HospitalController::class,'store'])->name('surgical-data');


Route::get('/career/radio-therapist', [HospitalController::class , 'radioTherapist'])->name('radio-therapist');
Route::post('/radio', [HospitalController::class,'store'])->name('radio');


Route::get('/career/pediatrician', [HospitalController::class , 'pediatrician'])->name('pediatrician');
Route::post('/pediatrician-data', [HospitalController::class,'store'])->name('pediatrician-data');


Route::get('/career/g-i-surgeon', [HospitalController::class , 'giSurgeon'])->name('g-i-surgeon');
Route::post('/surgeonData', [HospitalController::class,'store'])->name('surgeonData');


Route::get('/career/intensivist', [HospitalController::class , 'intensivist'])->name('intensivist');
Route::post('/intensivist-data', [HospitalController::class,'store'])->name('intensivist-data');


Route::get('/career/junior-resident-medical-officers', [HospitalController::class , 'medicalOfficers'])->name('junior-resident-medical-officers');
Route::post('/medical_officers_data', [HospitalController::class,'store'])->name('medical_officers_data');


// Add this route to fetch and display data
// Route::get('show', [HospitalController::class, 'show'])->name('show');



// Route::get('/career/associate-consultant', function () {
//     return view('associate-consultant');
// })->name('associate-consultant');



// Route::get('/career/rmo', function () {
//     return view('rmo');
// })->name('rmo');

// Route::get('/career/medical-oncologist', function () {
//     return view('medical-oncologist');
// })->name('medical-oncologist');

// Route::get('/career/surgical-oncologist', function () {
//     return view('surgical-oncologist');
// })->name('surgical-oncologist');

// Route::get('/career/radio-therapist', function () {
//     return view('radio-therapist');
// })->name('radio-therapist');

// Route::get('/career/pediatrician', function () {
//     return view('pediatrician');
// })->name('pediatrician');

// Route::get('/career/g-i-surgeon', function () {
//     return view('g-i-surgeon');
// })->name('g-i-surgeon');

// Route::get('/career/intensivist', function () {
//     return view('intensivist');
// })->name('intensivist');

// Route::get('/career/junior-resident-medical-officers', function () {
//     return view('junior-resident-medical-officers');
// })->name('junior-resident-medical-officers');


Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');