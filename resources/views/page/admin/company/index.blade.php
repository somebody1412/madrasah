

<div>
  <h1>This is company page</h1>

  <br/>
  <br/>
  <br/>
  @if (sizeof($companiesWithoutCommission)>0)
    <div>
      @foreach ($companiesWithoutCommission as $companies)
        <span>{{$companies->name}}, </span>
      @endforeach
      <span> has no commissions yet.</span>
    </div>
  @endif

  <br/>
  <br/>
  <br/>
  <table>
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Company Registration Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($companies as $company)
        <tr>
          <td>{{$company->name}}</td>
          <td>{{$company->reg_no}}</td>
          <td>
            <a href="/dashboard/company/{{$company->id}}">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
