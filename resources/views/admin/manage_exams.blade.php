@extends('admin.header')
@section('content')
<div>
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="route('exam.store')" method="post" class="">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Exam</div>
                        <input type="text" id="username3" name="exam_name" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Exam Description</div>
                        <input type="text" id="email3" name="exam_description" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>

                <div class="form-actions form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Add</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-nf-container"><span class="select2-selection__rendered" id="select2-property-nf-container" title="All Properties">All Properties</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 78px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-ca-container"><span class="select2-selection__rendered" id="select2-time-ca-container" title="Today">Today</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <div class="dropDownSelect2"></div>
                </div>
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters</button>
            </div>
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button>
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2 select2-hidden-accessible" name="type" tabindex="-1" aria-hidden="true">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 84.4px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-type-m1-container"><span class="select2-selection__rendered" id="select2-type-m1-container" title="Export">Export</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created at</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr-shadow">
                        @foreach ($exams as $exam)
                        <td>{{$exam->id}}</td>
                        <td>{{$exam->exam_name}}</td>



                        <td class="desc">Samsung S8 Black</td>
                        <td>2018-09-27 02:12</td>
                        <td>
                            <span class="status--process">Processed</span>
                        </td>
                        <td>$679.00</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection
