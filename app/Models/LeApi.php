<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class LeApi
{
    public static function member_login($nric,$password)
    {
        return LeClient::user_post('/member/user/loginWithNric',[
            "nric"=>$nric,
          	"password"=>$password,
          	"deviceId"=>"PERMISSION_NOT_GRANTED"
        ]);
    }

    public static function member_profile()
    {
        return LeClient::user_get('/member/user/1');
    }

    public static function admin_totalMember($filterSearch = []){
        return LeClient::admin_post('/member', [
            'filterSearch' => $filterSearch,
            'pageNo' => 1,
            'totalRowPerPage' => 1,
        ])->totalRow;
    }

    public static function admin_listMember($filterSearch = []){
        $pageNo = 0;
        do{
            $page = LeClient::admin_post('/member', [
                'filterSearch' => $filterSearch,
                'pageNo' => ++$pageNo,
                'totalRowPerPage' => 50,
            ]);
            $total = $page->totalPage;
            foreach ($page->arrayList as $member) {
                yield Arr::only((array)$member, [
                    'id', 'nric', 'name', 'memberCategory',
                    'status', 'createdDate', 'startDate', 'lastTopUpDate',
                ]);
            }
        } while ($pageNo < $total);
    }

    public static function member_info($id)
    {
        return LeClient::admin_get("/member/$id");
    }

    public static function admin_login()
    {
        $response=LeClient::admin_post('/user/login',[
          "email"=> "admin@appxtream.com",
          "password"=> "password"
        ]);
        return Cache::put('admin_token', $response->apiKey);
    }

    public static function admin_getAgentReferRecord($nric,$page=1)
    {
        return LeClient::admin_post('/agent/report',[
            "filterSearch"=>array([
                "searchVar"=>"agentNric",
                "searchKeyword"=>$nric
            ]),
            "pageNo"=>$page,
            "totalRowPerPage"=>20
        ]);
    }

    public static function admin_getCompanyList()
    {
        return LeClient::admin_post('/agentCompany',[
            "filterSearch"=>array(),
            "pageNo"=>1,
            "totalRowPerPage"=>1000
        ])->arrayList;
    }
}
