<style>

    .team-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .team {
      display: flex;
      align-items: center;
    }
    .team img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }
    .score {
      font-size: 20px;
    }
    .match-details {
      text-align: center;
    }
    .match-details img {
      width: 60px;
      height: 40px;
    }
  </style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">Matches</h4>

                    </div>
                    <div>
                        <a href="{{route('dashboard.match.new.view')}}" class="btn btn-primary">Ajouter un match</a>
                    </div>
                </div>



                <div class="row mt-8">
                    @foreach ($matches as $matche )
                    <div class="col-md-6">
                        @include('admin.pages.matches.partials.single_match')
                    </div>
                    @endforeach


                </div>

            </div>
            <!--end card body-->

        </div>
    </div>
</div>
