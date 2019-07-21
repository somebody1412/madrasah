<?php

namespace App\Console\Commands;

use App\Models\LeApi;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MemberSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'member:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update member info from Life Engineering.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::beginTransaction();
        DB::table('members')->update([
            'deleted_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        foreach (LeApi::admin_listMember() as $member){
            DB::table('members')->updateOrInsert([
                'id' => $member['id'],
            ], [
                'nric' => $member['nric'],
                'created_date' => Carbon::parse($member['createdDate'])->toDateString(),
                'start_date' => Carbon::parse($member['startDate'])->toDateString(),
                'last_topup' => Carbon::parse($member['lastTopUpDate'])->toDateString(),
                'status' => $member['status'],
                'category' => $member['memberCategory'],
                'deleted_at' => null,
            ]);
        }
        DB::commit();
        return 0;
    }
}
