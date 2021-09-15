<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("crewUI.profile", ["data"=>$user]);
        //return view('crewUI.profile');
    }
    public function edit()
    {
        $user = Auth::user();
        return view("crewUI.profile_edit", ["data"=>$user]);
        //return view('crewUI.profile');
    }
    public function crewInformations()
    {
        $user = Auth::user();
        return view("crewUI.crewInformation", ["data"=>$user]);
        //return view('crewUI.profile');
    }
    public function save(Request $request)
    {
        if(($request->image_url)=="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABkCAYAAAA8AQ3AAAAAAXNSR0IArs4c6QAAAvRJREFUeF7t1AEJAAAMAsHZv/RyPNwSyDncOQIECEQEFskpJgECBM5geQICBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECDxmQABlNwQbOQAAAABJRU5ErkJggg=="){
            return redirect('/crewInformations')->with('require', 'Signature is Required');
        }
        trim($request->Phone_Number);

        $validator=Validator::make($request->all(),[            
            
            'first_name'=>'required',
            // if(isset($request->Phone_Number)){
                // 'Phone_Number'=>'nullable|numeric|between:6,12',
            // }
            
            // 'Second_Phone_Number'=>'nullable|numeric|between:6,12',
            // 'street1'=>'required',
            // 'city'=>'required',
            // 'state'=>'required',
            // 'postal_code'=>'required|numeric|between:6,6',
            // 'mailing_Street1'=>'required',
            // 'mailing_city'=>'required',
            // 'mailing_state'=>'required',
            // 'mailing_postal_code'=>'required|numeric|between:6,6',
            // 'Make'=>'required',
            // 'Model'=>'required',
            // 'License_plate'=>'required',
            // 'color'=>'required',
            // 'em_name'=>'required',
            // 'em_mail'=>'required|email',
            // 'em_phone'=>'required|numeric|between:6,12',
            // 'em_relations'=>'required',
            // 'Citizenship'=>'required',
            // 'Issueing_Authority'=>'required',
            // 'Number'=>'required',
            // 'Expiration'=>'required',
            // 'passport_Issueing_Authority'=>'required',
            // 'passport_Number'=>'required',
            // 'passport_Expiration'=>'required',
            // 'Marital_Status'=>'required',
            // 'Number_of_Dependents'=>'required',
            // 'Other_Dependents'=>'required',
            // 'Other_Income'=>'required',
            // 'Deductions'=>'required',
            // 'Additional_amount_to_withold'=>'required',
            // 'Business_Name'=>'required',
            // 'DBA'=>'required',
            // 'Federal_Tax_Classification'=>'required',
            // 'State_Tax_Marital_Status'=>'required',
            // 'State_Tax_Number_of_dependents'=>'required',
            // 'State_Tax_Additional_Allowances'=>'required',
            // 'State_Tax_Additional_Withholding'=>'required',
            // 'State_Tax_Total_Allowances'=>'required',
            // 'Ethnicity'=>'required',
            // 'Hire_Status'=>'required',
            // 'Employee_Status'=>'required',
            // 'Start_Date'=>'required',
            // 'Department'=>'required',
            // 'Position'=>'required',
            // 'Union'=>'required',
            // 'OCC_Code'=>'required',
            // 'Studio/Distant'=>'required',
            // 'Daily/Week'=>'required',
            // 'Paid'=>'required',
            // 'Shirt_Size'=>'required',
            // 'Rate'=>'required',
            // 'Guaranteed_Hours'=>'required',
        ]);
        if($validator->fails()){
            return redirect('/crewInformations')->withInput()->withErrors($validator);
        }
        else{           

            // dd($request->all());

            $user = User::where('id', '=', $request->user_id)->first();
        if ($user) {

            // $siName= !empty($_POST['signName']) ? $_POST['signName'] : '';
            $image_url = $request->image_url;
            // $image_name = $siName."_signature.png"; 

            if ($image_url) {
                $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image_url));  
                $image_name = time()."_signature.png";
                file_put_contents(base_path().'/public/assets/signature/'.$image_name, $data);
                // file_put_contents('zoho/uploads/'.$image_name, $data);
            }

            $my_template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('FillableW9_use.docx'));

            // $my_template->setValue('name', $request->first_name);
            // $my_template->setImageValue('signature', base_path().'/public/assets/docs/'.$image_name);
            $my_template->setImageValue('signature', [
                'path' => base_path().'/public/assets/signature/'.$image_name,
                'width' => 50,
                'height' => 28,
              ]);
            $my_template->setValue('datesign', now());

            $docname= time()."_FillableW9.docx";

            try{
            $my_template->saveAs(base_path().'/public/assets/docx/'.$docname);
            }catch (Exception $e){
            //handle exception
            }

            // return response()->download(storage_path('user_1.docx'));
            return redirect('/preview')->with('w9doc', $docname);
        }
        // if ($user) {
        //     $result = DB::table('users')
        //     ->where('id', $request->user_id)
        //     ->update([
        //         'fname' => $request->first_name,
        //         'mname' => $request->mname,
        //         'lname' => $request->last_name,
        //         'signature' => $request->image_url,
        //         'Preffered_Name' => $request->Preffered_Name,
        //         'Phone_Number' => $request->Phone_Number,
        //         'Second_Phone_Number' => $request->Second_Phone_Number,
        //         'DOB' => $request->DOB,
        //         'updated_at'=>now()
        //     ]);
        // }
            // return redirect('/crewInformations')->with('sweetalert', 'Form Data Has Been Inserted Successfully');

        }
        
    }
}
