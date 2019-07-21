<div>
  <h1>Company Detail Page</h1>

  <div>
    <p><span><b>Company Name</b></span>: {{$company->name}}</p>
    <p><span><b>Company Registration Number</b></span>: {{$company->reg_no}}</p>
  </div>

  <br/>

  <div>

    {{ Form::open(array('url' => '/dashboard/company/update')) }}
    {{ csrf_field() }}
    <h2>Commissions</h2>
    <p><span><b>Company First Stage Commission</b></span>:
      <input name='stage1CommissionAmount' value='{{$company->company_stage_1_commission()->amount}}'/>
    </p>
    <p><span><b>Company Second Stage Commission</b></span>:
      <input name='stage2CommissionAmount' value='{{$company->company_stage_2_commission()->amount}}'/>
    </p>
    <p><span><b>Company Annual Commission</b></span>:
      <input name='annualCommissionAmount' value='{{$company->company_annual_commission()->amount}}'/>
    </p>
    <input name='company_id' hidden value='{{$company->id}}'/>
    <button type="submit">Submit</button>
    {{ Form::close() }}

  </div>
</div>
