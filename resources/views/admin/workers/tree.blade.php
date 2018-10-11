@extends('admin.admin_layout')

@section('sidebar')
    @parent
@endsection

@section('content')
    <!-- ### $App Screen Content ### -->
    <main class='main-content bgc-grey-100'>
        <div id='mainContent'>
            <div class="container-fluid">
                <h4 class="c-grey-900 mT-10 mB-30">Workers</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>
                                        <label for="name_search">Name</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn input-group-text"><i class="fa fa-sort-amount-desc"></i></button>
                                            </div>
                                            <input type="text" class="form-control" name="name_seach" id="name_search">
                                            <div class="input-group-append">
                                                <button class="btn input-group-text"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <label for="position_search">Position</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn input-group-text"><i class="fa fa-sort-amount-desc"></i></button>
                                            </div>
                                            <input type="text" class="form-control" name="position_search" id="position_search">
                                            <div class="input-group-append">
                                                <button class="btn input-group-text"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <label for="office_search">Office</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn input-group-text"><i class="fa fa-sort-amount-desc"></i></button>
                                            </div>
                                            <input type="text" class="form-control" name="office_search" id="office_search">
                                            <div class="input-group-append">
                                                <button class="btn input-group-text"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <label for="age_search">Age</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn input-group-text"><i class="fa fa-sort-amount-desc"></i></button>
                                            </div>
                                            <input type="text" class="form-control" name="age_search" id="age_search">
                                            <div class="input-group-append">
                                                <button class="btn input-group-text"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <label for="start_date_search">Start date</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn input-group-text"><i class="fa fa-sort-amount-desc"></i></button>
                                            </div>
                                            <input type="text" class="form-control" name="start_date_search" id="start_date_search">
                                            <div class="input-group-append">
                                                <button class="btn input-group-text"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <label for="salary_search">Salary</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn input-group-text"><i class="fa fa-sort-amount-desc"></i></button>
                                            </div>
                                            <input type="text" class="form-control" name="salary_search" id="salary_search">
                                            <div class="input-group-append">
                                                <button class="btn input-group-text"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection