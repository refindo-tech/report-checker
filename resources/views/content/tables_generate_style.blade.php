@extends('inc.main')
@section('title', 'Generate Table Style')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Tables'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='fal fa-th-list text-primary'></i> Generate Table Style
            </h1>
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                        <i class="base-3 icon-stack-2x color-primary-600 opacity-70"></i>
                        <i class="fal fa-lightbulb icon-stack-1x text-white opacity-90"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">Helpful tip</span>
                        <br>
                        Alternatively you can generate a dummy table and simply insert the classes needed manually with this
                        external generator <a href="https://www.generatedata.com/"
                            target="_blank">https://www.generatedata.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-g">
                    <h5 class="card-header">
                        Table <span class="fw-300">Layout Generator </span>
                    </h5>
                    <div class="card-body">
                        <h5 class="frame-heading">
                            Select styles
                        </h5>
                        <div class="frame-wrap bg-faded mb-5">
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" checked="checked" class="custom-control-input" id="bordered"
                                    data-class="table-bordered">
                                <label class="custom-control-label" for="bordered">Bordered Table</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="smaller" data-class="table-sm">
                                <label class="custom-control-label" for="smaller">Smaller Table</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="dark" data-class="table-dark">
                                <label class="custom-control-label" for="dark">Table Dark</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="light" data-class="table-light">
                                <label class="custom-control-label" for="light">Table light</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="hover" data-class="table-hover">
                                <label class="custom-control-label" for="hover">Table Hover</label>
                            </div>
                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                <input type="checkbox" class="custom-control-input" id="stripe"
                                    data-class="table-striped">
                                <label class="custom-control-label" for="stripe">Table Stripped</label>
                            </div>
                        </div>
                        <h5 class="frame-heading p-0 mb-g">
                            Generated preview:
                        </h5>
                        <div class="frame-wrap p-0 border-0 m-0">
                            <table class="table m-0 table-bordered" id="table-example">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Company</th>
                                        <th>City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Inga</td>
                                        <td>metus.Aliquam@ametlorem.ca</td>
                                        <td>1-318-627-3874</td>
                                        <td>Montes Industries</td>
                                        <td>Dolgellau</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>nec.enim.Nunc@facilisis.net</td>
                                        <td>1-963-499-3886</td>
                                        <td>Risus Quisque Inc.</td>
                                        <td>Cascavel</td>
                                    </tr>
                                    <tr>
                                        <td>Jeanette</td>
                                        <td>non@afeugiattellus.co.uk</td>
                                        <td>1-133-240-5173</td>
                                        <td>Quis Diam Corporation</td>
                                        <td>Springdale</td>
                                    </tr>
                                    <tr>
                                        <td>Randall</td>
                                        <td>dignissim.magna.a@ipsum.co.uk</td>
                                        <td>1-859-866-0345</td>
                                        <td>Mauris Blandit Associates</td>
                                        <td>Patarrá</td>
                                    </tr>
                                    <tr>
                                        <td>Roanna</td>
                                        <td>nascetur.ridiculus@fermentumvel.co.uk</td>
                                        <td>1-289-706-6780</td>
                                        <td>Non Enim Commodo Incorporated</td>
                                        <td>New Galloway</td>
                                    </tr>
                                    <tr>
                                        <td>Macaulay</td>
                                        <td>Fusce@egestasligulaNullam.ca</td>
                                        <td>1-726-644-6609</td>
                                        <td>Et LLC</td>
                                        <td>Sandy</td>
                                    </tr>
                                    <tr>
                                        <td>Chiquita</td>
                                        <td>luctus@metuseuerat.edu</td>
                                        <td>1-258-865-1127</td>
                                        <td>Cursus Consulting</td>
                                        <td>Masterton</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary mt-3 float-right">Get Table Style</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script>
        $('input:checkbox').change(function() {
            if ($(this).is(":checked")) {
                $('#table-example').addClass($(this).attr("data-class"));
            } else {
                $('#table-example').removeClass($(this).attr("data-class"));
            }
        });
    </script>
@endsection
