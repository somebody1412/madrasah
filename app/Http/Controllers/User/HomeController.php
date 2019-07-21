<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\LeApi;
use App\Models\UserExamStatus;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function index()
  {
      // Exam Passed, log in now
      if (Auth::user()->isExamPassed())
      {
          $profile = LeApi::member_profile()->viewAObject;
          $refer_records= LeApi::admin_getAgentReferRecord("870826385437");
          return view('user::dashboard.home',compact('profile'));
      }

      // Exam Failed, need to wait to be reopened
      if (Auth::user()->exam_status_id == UserExamStatus::getFailStatusId())
          return redirect('/user/exam');

      // Not yet exam or exam reopen or currently in exam
      return redirect('/user/exam');
  }
}
