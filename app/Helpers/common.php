<?php

use App\Models\division;
use App\Models\Expert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Intervention\Image\Facades\Image;

function getModuleTitle(string $title = null, array $removeWork = null): Stringable
{
   return Str::of($title)->remove($removeWork);
}

function uploadImage($file, $fileSize, $uploadPath, $actionType, $oldFileName, $singleFile = false): string
{
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    if ($singleFile){
        if (!file_exists($uploadPath)){
            mkdir($uploadPath, 0777, true);
        }
    }else{
        if (!file_exists($uploadPath.'large')){
            mkdir($uploadPath.'large', 0777, true);
        }
        if (!file_exists($uploadPath.'small')){
            mkdir($uploadPath.'small', 0777, true);
        }
    }

    if ($actionType == 'update'){
        //delete old image if exist
        if ($singleFile){
            if (file_exists($uploadPath.$oldFileName)){
                unlink($uploadPath.$oldFileName);
            }
        }else{
            if (file_exists($uploadPath.'large/'.$oldFileName)){
                unlink($uploadPath.'large/'.$oldFileName);
            }
            if (file_exists($uploadPath.'small/'.$oldFileName)){
                unlink($uploadPath.'small/'.$oldFileName);
            }
        }
    }
    if ($singleFile){
        $file->move($uploadPath, $fileName);
        $img = Image::make($uploadPath.$fileName);
        $img->resize($fileSize['small']['width'],$fileSize['small']['height'], function ($constraint) {
            $constraint->aspectRatio();
        });
        $canvas = Image::canvas($fileSize['small']['width'],$fileSize['small']['height']);
        $canvas->insert($img, 'center');
        $canvas->save($uploadPath.$fileName);
        //Image::make($uploadPath.$fileName)->resize($fileSize['small']['width'],$fileSize['small']['height'])->save($uploadPath.$fileName);
    }else{
        $file->move($uploadPath.'large', $fileName);
        $img = Image::make($uploadPath.'large/'.$fileName);
        $img->resize($fileSize['large']['width'],$fileSize['large']['height'], function ($constraint) {
            $constraint->aspectRatio();
        });
        $canvas = Image::canvas($fileSize['large']['width'],$fileSize['large']['height'], 'rgba(24, 29, 56, .3)');
        $canvas->insert($img, 'center');
        $canvas->save($uploadPath.'large/'.$fileName);

        $img->resize($fileSize['small']['width'],$fileSize['small']['height'], function ($constraint) {
            $constraint->aspectRatio();
        });
        $canvas = Image::canvas($fileSize['small']['width'],$fileSize['small']['height'], 'rgba(24, 29, 56, .3)');
        $canvas->insert($img, 'center');
        $canvas->save($uploadPath.'small/'.$fileName);
    }
    return $fileName;

}


function deleteFileFromFolder($uploadPath, $oldFileName, $singleFile = false){
    if ($singleFile){
        if (file_exists($uploadPath.$oldFileName)){
            unlink($uploadPath.$oldFileName);
        }
    }else{
        if (file_exists($uploadPath.'large/'.$oldFileName)){
            unlink($uploadPath.'large/'.$oldFileName);
        }
        if (file_exists($uploadPath.'small/'.$oldFileName)){
            unlink($uploadPath.'small/'.$oldFileName);
        }
    }
}


function getGender($value): string
{
    return $value == 1 ? 'Male' : 'Female';
}

function getIprs(){
    return ['1' => 'Trade mark', 'Copy right', 'Patent'];
}

function setDefaultValue($original, $default){
   return $original ?? $default;
}

function checkLoginUserAdminOrSuperAdmin($user): bool
{
    return in_array($user->userGroup->slug, ['admin', 'super-admin']);
}

function hasPermission(array $routeName): bool
{
    $accessibleRoutes = collect(Auth::user()->userGroup->moduleActions->pluck('route_name'));
    $intersect = $accessibleRoutes->intersect($routeName);
    return $intersect->count() > 0 ? true : false;
}

function getCheckByUsers(){
    return User::where([
        ['user_group_id', 4],
        ['status', 1]
    ])->get(['id','name', 'email', 'designation']);
}
function getApproveByUsers(){
    return User::whereIn('user_group_id',[1,2,3])->get(['id','name', 'email', 'designation']);
}

function getUserById($userId){
    return User::firstWhere('id', $userId);
}
