<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BusinessInsurance;
use Illuminate\Http\Request;
use Image;
use File;

class BusinessInsuranceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $businessinsurance = BusinessInsurance::where('title', 'LIKE', "%$keyword%")
                ->orWhere('short_description', 'LIKE', "%$keyword%")
                ->orWhere('long_description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $businessinsurance = BusinessInsurance::paginate($perPage);
            }

            return view('admin.business-insurance.index', compact('businessinsurance'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.business-insurance.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'short_description' => 'required',
			'long_description' => 'required',
			'image' => 'required'
		]);

            $businessinsurance = new businessinsurance($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $businessinsurance_path = 'uploads/businessinsurances/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($businessinsurance_path) . DIRECTORY_SEPARATOR. $profileImage);

                $businessinsurance->image = $businessinsurance_path.$profileImage;
            }
            
            $businessinsurance->save();

            return redirect('admin/business-insurance')->with('flash_message', 'BusinessInsurance added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $businessinsurance = BusinessInsurance::findOrFail($id);
            return view('admin.business-insurance.show', compact('businessinsurance'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $businessinsurance = BusinessInsurance::findOrFail($id);
            return view('admin.business-insurance.edit', compact('businessinsurance'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'short_description' => 'required',
			'long_description' => 'required',
			'image' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $businessinsurance = businessinsurance::where('id', $id)->first();
            $image_path = public_path($businessinsurance->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/businessinsurances/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/businessinsurances/'.$fileNameToStore;               
        }


            $businessinsurance = BusinessInsurance::findOrFail($id);
             $businessinsurance->update($requestData);

             return redirect('admin/business-insurance')->with('flash_message', 'BusinessInsurance updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('businessinsurance','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            BusinessInsurance::destroy($id);

            return redirect('admin/business-insurance')->with('flash_message', 'BusinessInsurance deleted!');
        }
        return response(view('403'), 403);

    }
}
