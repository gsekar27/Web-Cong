<!DOCTYPE html>
<html ng-app="MainApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>Congress Information Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
</head>

<body ng-controller="congressDBMainController">
    <!-- Page Header-->
    <div class="row">
        <div class="page-header pHeader col-sm-12 col-md-12 col-lg-12">

            <div class="col-sm-6 col-md-6 col-lg-6">
                <a href="#" id="btnSideBar"><i class="fa fa-bars fa-lg" style="color:black" aria-hidden="true"></i>&nbsp;</a>
            </div>
            <div class=" col-sm-6 col-md-6 col-lg-6">
                <a href="http://sunlightfoundation.com/" target="_blank"><img src="http://cs-server.usc.edu:45678/hw/hw8/images/logo.png" id="img-logo">
                </a>
                <span id="text-logo"> Congress API </span>
            </div>
        </div>
    </div>
    <!-- Page Header-->
    <!-- /#Main Content -->
    <div id="MainPageContent">
        <!-- Sidebar -->
        <div id="MainSidebar">
            <ul role="nav-tabs" class="sidebar-nav">
                <li>
                    <a href="#legislators" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Legislators</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#bills" ng-click="bills()"><i class="fa fa-file-o" aria-hidden="true"></i>&nbsp; Bills</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#committees" ng-click="committee()"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Committees</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#favorites" ng-click="favourite()"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; Favorites</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-->
        <!-- /#page-content-->
        <div id="page-content">
            <!-- main content container -->
            <div class="container-fluid">
                <div class="tab-content">
                    <!-- legislators -->
                    <div class="tab-pane active" id="legislators">
                        <div class="page-header leg-header">
                            <h3>Legislators</h3>
                        </div>
                        <!-- /#caraousel content -->
                        <div id="leg-carousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <!-- /#legilator content -->
                                <div id="legislator-content" class="item active">
                                    <ul class="nav nav-tabs legislator-content-tab-header">
                                        <li class="active leg-tab"><a href="#result-data" data-toggle="tab">By State</a>
                                        </li>
                                        <li class="leg-tab"><a href="#result-data-house" data-toggle="tab">House</a>
                                        </li>
                                        <li class="leg-tab"><a href="#result-data-senate" data-toggle="tab">Senate</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="leg-tab-content">
                                        <!---By State-legislator--->
                                        <div role="tabpanel" id="result-data" class="tab-pane active">
                                            <div id="leg-tab-data" class="panel panel-default">
                                                <div id="legislator-tab-header" class="well">
                                                    <span id="leg-tab-label">Legislators By State</span>
                                                    <span id="leg-tab-search">
                                             <form class="form-inline leg-form">
                                                <select id = "state-select" ng-model = "leg_searchByState">
                                                   <option selected value="">All States</option>
                                                   <option value="AL">Alabama</option>
                                                   <option value="AK">Alaska</option>
                                                   <option value="AZ">Arizona</option>
                                                   <option value="AR">Arkansas</option>
                                                   <option value="CA">California</option>
                                                   <option value="CO">Colorado</option>
                                                   <option value="CT">Connecticut</option>
                                                   <option value="DE">Delaware</option>
                                                   <option value="DC">District Of Columbia</option>
                                                   <option value="FL">Florida</option>
                                                   <option value="GA">Georgia</option>
                                                   <option value="HI">Hawaii</option>
                                                   <option value="ID">Idaho</option>
                                                   <option value="IL">Illinois</option>
                                                   <option value="IN">Indiana</option>
                                                   <option value="IA">Iowa</option>
                                                   <option value="KS">Kansas</option>
                                                   <option value="KY">Kentucky</option>
                                                   <option value="LA">Louisiana</option>
                                                   <option value="ME">Maine</option>
                                                   <option value="MD">Maryland</option>
                                                   <option value="MA">Massachusetts</option>
                                                   <option value="MI">Michigan</option>
                                                   <option value="MN">Minnesota</option>
                                                   <option value="MS">Mississippi</option>
                                                   <option value="MO">Missouri</option>
                                                   <option value="MT">Montana</option>
                                                   <option value="NE">Nebraska</option>
                                                   <option value="NV">Nevada</option>
                                                   <option value="NH">New Hampshire</option>
                                                   <option value="NJ">New Jersey</option>
                                                   <option value="NM">New Mexico</option>
                                                   <option value="NY">New York</option>
                                                   <option value="NC">North Carolina</option>
                                                   <option value="ND">North Dakota</option>
                                                   <option value="OH">Ohio</option>
                                                   <option value="OK">Oklahoma</option>
                                                   <option value="OR">Oregon</option>
                                                   <option value="PA">Pennsylvania</option>
                                                   <option value="RI">Rhode Island</option>
                                                   <option value="SC">South Carolina</option>
                                                   <option value="SD">South Dakota</option>
                                                   <option value="TN">Tennessee</option>
                                                   <option value="TX">Texas</option>
                                                   <option value="UT">Utah</option>
                                                   <option value="VT">Vermont</option>
                                                   <option value="VA">Virginia</option>
                                                   <option value="WA">Washington</option>
                                                   <option value="WV">West Virginia</option>
                                                   <option value="WI">Wisconsin</option>
                                                   <option value="WY">Wyoming</option>
                                                </select>
                                             </form>
                                          </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="leg-main-table" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <div class="row">
                                                                <tr>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Party</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Name</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Chamber</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>District</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>State</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th></th>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="item in resultDataLegByState |orderBy: ['state_name','last_name']| filter: {state:leg_searchByState}|itemsPerPage:10" pagination-id="legislator-pg">
                                                                    <div class="col-md-1">
                                                                        <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.party == 'R'?'r.png':'d.png'}}">
                                                                        </td>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <td>{{ item.last_name + ', ' + item.first_name }}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>{{item.district == null ? 'N.A':'District ' + item.district}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>{{item.state_name}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>
                                                                            <button class="btn btn-info btn-responsive" ng-click="viewDetails(item)" href="#leg-carousel" data-slide="next">
                                                                                View Details
                                                                            </button>
                                                                        </td>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="legislator-pg" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!--By state legislator-->
                                        <!--By house legislator-->
                                        <div role="tabpanel" id="result-data-house" class="tab-pane">
                                            <div id="leg-tab-data" class="panel panel-default">
                                                <div id="legislator-tab-header" class="well">
                                                    <span id="leg-tab-label">Legislators By House</span>
                                                    <span id="leg-tab-search">
                                             <form id = "search-leg-form" class="form-inline leg-form">
                                                <input id = "leg-house-search"type="text" ng-model="leg_searchByHouse" placeholder="Search" value=""/>
                                             </form>
                                          </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="leg-main-table-house" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <div class="row">
                                                                <tr>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Party</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Name</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Chamber</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>District</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>State</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th></th>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="item in resultDataLegByHouse|orderBy:'last_name'|filter:leg_searchByHouse|itemsPerPage:10" pagination-id="legislator-pg-house">
                                                                    <div class="col-md-1">
                                                                        <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.party == 'R'?'r.png':'d.png'}}">
                                                                        </td>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <td>{{ item.last_name + ', ' + item.first_name }}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>{{item.district == null ? 'N.A.':'District ' + item.district}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>{{item.state_name}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>
                                                                            <button class="btn btn-info btn-responsive" ng-click="viewDetails(item)" href="#leg-carousel" data-slide="next">
                                                                                View Details
                                                                            </button>
                                                                        </td>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="legislator-pg-house" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!--By house legislator-->
                                        <!-- By senate legislator-->
                                        <div role="tabpanel" id="result-data-senate" class="tab-pane">
                                            <div id="leg-tab-data" class="panel panel-default">
                                                <div id="legislator-tab-header" class="well">
                                                    <span id="leg-tab-label">Legislators By Senate</span>
                                                    <span id="leg-tab-search">
                                             <form id = "search-leg-form" class="form-inline">
                                                <input id = "leg-senate-search" type="text" ng-model="leg_searchBySenate" placeholder="Search" value=""/>
                                             </form>
                                          </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="leg-main-table" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <div class="row">
                                                                <tr>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Party</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Name</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>Chamber</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th>State</th>
                                                                    </div>
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <th></th>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="item in resultDataLegBySenate|orderBy: 'last_name'| filter: leg_searchBySenate|itemsPerPage:10" pagination-id="legislator-pg-senate">
                                                                    <div class="col-md-1">
                                                                        <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.party == 'R'?'r.png':'d.png'}}">
                                                                        </td>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <td>{{ item.last_name + ', ' + item.first_name }}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>{{item.state_name}}</td>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <td>
                                                                            <button class="btn btn-info btn-responsive" ng-click="viewDetails(item)" href="#leg-carousel" data-slide="next">
                                                                                View Details
                                                                            </button>
                                                                        </td>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="legislator-pg-senate" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!---By senate legislator-->
                                    </div>
                                </div>
                                <!-- /#legilator content -->
                                <!-- /#View Details -->
                                <div id="leg-view-details" class="item">
                                    <div id="leg-view-details-header" class="page-header">
                                        <button id="butn-back" class="btn btn-default" href="#leg-carousel" data-slide="prev">
                                            <i class="fa fa-chevron-left"></i>
                                        </button>
                                        <span id="details-label">Details</span>
                                        <span>
                                          <button id = "leg-fav-click" ng-click="favLeg(viewDetailsRowData)" class="btn btn-info btn-responsive btn-fav">
                                            <i ng-if="IsFavLeg(viewDetailsRowData)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                            <i ng-if = "!IsFavLeg(viewDetailsRowData)" class="fa fa-star-o fa-lg"  style="color:grey"aria-hidden="true"></i>
                                          </button>
                                        </span>

                                    </div>
                                    <!-- /#View Details Content -->
                                    <div id="leg-view-details-content">
                                        <div class="col-md-6 col-lg-6 table-responsive">
                                            <table id="leg-vd-pd-content" class="table">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="5"><img id="leg-vd-pd-img" src="https://theunitedstates.io/images/congress/original/{{viewDetailsRowData.bioguide_id + '.jpg'}}">
                                                        </td>
                                                        <td>{{ viewDetailsRowData.title + '. ' + viewDetailsRowData.last_name + ', ' + viewDetailsRowData.first_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="mailto:{{ viewDetailsRowData.oc_email }}"> {{ isNullString(viewDetailsRowData.oc_email)?'':viewDetailsRowData.oc_email }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ 'Chamber: ' + viewDetailsRowData.chamber.substring(0,1).toUpperCase()+ viewDetailsRowData.chamber.substring(1) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contact: <span class="phone-no">{{ viewDetailsRowData.phone }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="leg-vd-party-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{ viewDetailsRowData.party === 'R'? 'r.png':'d.png'  }}">{{ viewDetailsRowData.party === 'R'? 'Republic':'Democrat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Start Term</th>
                                                        <td>{{ viewDetailsRowData.term_start| date: 'mediumDate' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>End Term</th>
                                                        <td>{{ viewDetailsRowData.term_end | date: 'mediumDate'}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Term</th>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="{{progressValue}}" aria-valuemin="0" aria-valuemax="100" style="width:{{progressValue}}%">
                                                                    {{progressValue}}%
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Office</th>
                                                        <td>{{ viewDetailsRowData.office }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>State</th>
                                                        <td>{{ viewDetailsRowData.state_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fax</th>
                                                        <td class="phone-no">{{ viewDetailsRowData.fax }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Birthday</th>
                                                        <td>{{ viewDetailsRowData.birthday| date: 'mediumDate' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Social Links</th>
                                                        <td>

                                                            <a ng-if="!isNullString(viewDetailsRowData.twitter_id)" href="https://twitter.com/{{viewDetailsRowData.twitter_id}}" target="_blank"><img class="leg-vd-social-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/t.png">
                                                            </a>
                                                            <a ng-if="!isNullString(viewDetailsRowData.facebook_id)" href="https://www.facebook.com/{{viewDetailsRowData.facebook_id}}" target="_blank"><img class="leg-vd-social-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/f.png">
                                                            </a>
                                                            <a ng-if="!isNullString(viewDetailsRowData.website)" href="{{viewDetailsRowData.website}}" target="_blank"><img class="leg-vd-social-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/w.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 table-responsive">
                                                    <table id="leg-vd-comm-content" class="table">
                                                        <caption class="h4">Committees</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Chamber</th>
                                                                <th>Committee ID</th>
                                                                <th>Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="item_leg_vd in leg_committees_resultData|limitTo: limitCommitteeData">
                                                                <td>{{item_leg_vd.chamber.substring(0,1).toUpperCase()+ item_leg_vd.chamber.substring(1)}}</td>
                                                                <td>
                                                                    {{item_leg_vd.committee_id}}
                                                                </td>
                                                                <td>
                                                                    {{item_leg_vd.name}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 table-responsive">
                                                    <table id="leg-vd-bill-content" class="table">
                                                        <caption class="h4">Bills</caption>
                                                        <thead>
                                                            <tr>
                                                                <th class="col-md-1 col-lg-1">Bill ID</th>
                                                                <th class="col-md-3 col-lg-3">Title</th>
                                                                <th class="col-md-2 col-lg-2">Chamber</th>
                                                                <th class="col-md-1 col-lg-1">Bill Type</th>
                                                                <th class="col-md-2 col-lg-2">Congress</th>
                                                                <th class="col-md-2 col-lg-2">Link</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="item_leg_vd_bill_content in leg_bills_resultData|limitTo: limitCommitteeData">
                                                                <td>{{item_leg_vd_bill_content.bill_id|uppercase}}</td>
                                                                <td>{{item_leg_vd_bill_content.official_title}}</td>
                                                                <td>{{item_leg_vd_bill_content.chamber}}</td>
                                                                <td>{{item_leg_vd_bill_content.bill_type}}</td>
                                                                <td>{{item_leg_vd_bill_content.congress}}</td>
                                                                <td><a href="{{item_leg_vd_bill_content.last_version.urls.pdf}}" target="_blank">Link</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#View Details Content -->
                                </div>
                                <!-- /#View Details -->
                            </div>
                        </div>
                        <!-- /#caraousel content -->
                    </div>
                    <!-- legislators -->
                    <!---Bills-->
                    <div class="tab-pane" id="bills">
                        <div class="page-header bill-header">
                            <h3>Bills</h3>
                        </div>
                        <!-- /#caraousel content -->
                        <div id="bill-carousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <!-- /#Bill content -->
                                <div id="bill-content" class="item active">
                                    <ul class="nav nav-tabs bill-content-tab-header">
                                        <li class="active bill-tab"><a href="#result-data-bill" data-toggle="tab" ng-click="">Active Bills</a>
                                        </li>
                                        <li class="bill-tab"><a href="#result-data-bill-new" data-toggle="tab" ng-click="">New Bills</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="bill-tab-content">
                                        <!---Active Bills-->
                                        <div role="tabpanel" id="result-data-bill" class="tab-pane active">
                                            <div id="bill-tab-data" class="panel panel-default">
                                                <div id="bill-tab-header" class="well">
                                                    <span id="bill-tab-label">Active Bills</span>
                                                    <span id="bill-tab-search">
                                                     <form class="form-inline" id="search-bill-form">
                                                        <input id = "active-bill-search" type="text" ng-model="bill_searchActive" placeholder="Search" value=""/>
                                                     </form>
                                                  </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="bill-main-table" class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Bill ID</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Bill Type</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Title</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Introducted On</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Sponsor</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr dir-paginate="bill_item in billData|orderBy:'introduced_on':true| filter: bill_searchActive|itemsPerPage:10" pagination-id="bill-pg">

                                                                <td>{{bill_item.bill_id| uppercase}}</td>

                                                                <td>{{ bill_item.bill_type| uppercase}}</td>

                                                                <td>{{ bill_item.official_title }}</td>

                                                                <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{bill_item.chamber == 'house'?'h.png':'s.svg'}}">{{bill_item.chamber.substring(0,1).toUpperCase()+bill_item.chamber.substring(1)}}</td>
                                                                <td>{{ bill_item.introduced_on }}</td>
                                                                <td>{{ bill_item.sponsor.title + ". " + bill_item.sponsor.last_name + ", " + bill_item.sponsor.first_name }}</td>
                                                                <td>
                                                                    <button class="btn btn-info btn-responsive" ng-click="viewDetailsBills(bill_item)" href="#bill-carousel" data-slide="next">
                                                                        View Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="bill-pg" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!---Active Bills-->
                                        <!---New Bills-->
                                        <div role="tabpanel" id="result-data-bill-new" class="tab-pane">
                                            <div id="bill-tab-data" class="panel panel-default">
                                                <div id="bill-tab-header" class="well">
                                                    <span id="bill-tab-label">New Bills</span>
                                                    <span id="bill-tab-search">
                                             <form class="form-inline" id = "search-bill-form">
                                                <input id ="new-bill-search"type="text" ng-model="bill_searchNew" placeholder="Search" value=""/>
                                             </form>
                                          </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="bill-main-table" class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>

                                                            <tr>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Bill ID</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Bill Type</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Title</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Introducted</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Sponsor</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="bill_item in NewBillData|orderBy:'introduced_on':true| filter: bill_searchNew|itemsPerPage:10" pagination-id="bill-pg-new">
                                                                    <td>{{bill_item.bill_id| uppercase}}</td>
                                                                    <td>{{ bill_item.bill_type| uppercase}}</td>
                                                                    <td style="word-wrap: break-word;min-width: 100px;max-width: 100px;">{{ bill_item.official_title }}</td>
                                                                    <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{bill_item.chamber == 'house'?'h.png':'s.svg'}}">{{bill_item.chamber.substring(0,1).toUpperCase()+bill_item.chamber.substring(1)}}</td>
                                                                    <td>{{ bill_item.introduced_on }}</td>
                                                                    <td>{{ bill_item.sponsor.title + ". " + bill_item.sponsor.last_name + ", " + bill_item.sponsor.first_name }}</td>
                                                                    <td>
                                                                        <button class="btn btn-info btn-responsive" ng-click="viewDetailsBills(bill_item)" href="#bill-carousel" data-slide="next">
                                                                            View Details
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="bill-pg-new" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!---New Bills-->
                                    </div>
                                </div>
                                <!-- /#Bill content -->
                                <!-- /#Bill View Details -->
                                <div id="bill-view-details" class="item">
                                    <div id="bill-view-details-header" class="page-header">
                                        <span>
                                          <button  id="bill-butn-back" class = "btn btn-default" href="#bill-carousel" data-slide="prev">
                                          <i class="fa fa-chevron-left"></i>
                                        </button>
                                        </span>
                                        <span id="bill-details-label">Details</span>
                                        <span>
                                          <button id = "bill-fav-click" ng-click="favBill(viewDetailsBillRowData)" class="btn btn-info btn-responsive btn-fav">

                                           <i ng-if="IsFavBill(viewDetailsBillRowData)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                           <i ng-if = "!IsFavBill(viewDetailsBillRowData)" class="fa fa-star-o fa-lg"  style="color:grey"aria-hidden="true"></i>
                                           </button>
                                        </span>

                                    </div>
                                    <!-- /#Bill View Details Content -->
                                    <div id="bill-view-details-content">
                                        <div id="bill-vd-content" class="col-sm-6 col-md-6 col-lg-6 table-responsive">
                                            <table class="table" height="500px">
                                                <tbody>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Bill ID '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.bill_id| uppercase }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Title '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.official_title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Bill Type '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.bill_type| uppercase }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Sponsor '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.sponsor.title + ". " + viewDetailsBillRowData.sponsor.last_name + ", " + viewDetailsBillRowData.sponsor.first_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Chamber '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.chamber.substring(0,1).toUpperCase()+viewDetailsBillRowData.chamber.substring(1) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Status '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.history.active == false ? 'New': 'Active'}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Introduced On '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.introduced_on |date: 'mediumDate' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Congress URL '}}</th>
                                                        <td class="col-md-5 col-lg-5"><a href="{{  viewDetailsBillRowData.urls.congress }}" target="_blank">URL</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Version Status '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.last_version.version_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Bill URL '}}</th>
                                                        <td class="col-md-5 col-lg-5"><a href="{{  viewDetailsBillRowData.last_version.urls.pdf }}" target="_blank"> Link</a>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-lg-6" id="bill-vd-pdf">
                                            <object width="100%" height="500px" data="{{viewDetailsBillRowData.last_version.urls.pdf}} "></object>
                                        </div>
                                    </div>
                                    <!-- /#Bill View Details Content -->
                                </div>
                                <!-- /#Bill View Details -->
                            </div>
                        </div>
                        <!-- /#caraousel content -->
                    </div>
                    <!---Bills-->
                    <!--committee-->
                    <div class="tab-pane" id="committees">
                        <div class="page-header bill-header">
                            <h3>Committees</h3>
                        </div>
                        <!-- /#Committee content -->
                        <div id="comm-carousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div id="comm-content" class="item active">
                                    <ul class="nav nav-tabs comm-content-tab-header">
                                        <li class="active comm-tab"><a href="#result-data-comm-house" data-toggle="tab">House</a>
                                        </li>
                                        <li class="comm-tab"><a href="#result-data-comm-senate" data-toggle="tab">Senate</a>
                                        </li>
                                        <li class="comm-tab"><a href="#result-data-comm-joint" data-toggle="tab">Joint</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="comm-tab-content">
                                        <!---House-->
                                        <div role="tabpanel" id="result-data-comm-house" class="tab-pane active">
                                            <div id="comm-tab-data" class="panel panel-default">
                                                <div id="comm-tab-header" class="well">
                                                    <span id="comm-tab-label">House</span>
                                                    <span id="comm-tab-search">
                                             <form class="form-inline">
                                                <input type="text" ng-model="comm_searchHouse" placeholder="Search" value=""/>
                                             </form>

                                                </div>
                                                <!-- Table -->
                                                <div id="comm-main-table" class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                              <tr>
                                                                    <th class = "col-sm-1 col-md-1 col-lg-1"></th>
                                                                    <th class = "col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                    <th class = "col-sm-1 col-md-1 col-lg-1">Committee ID</th>
                                                                    <th class = "col-sm-6 col-md-6 col-lg-6">Name</th>
                                                                    <th class = "col-sm-1 col-md-1 col-lg-1">Parent Committee</th>
                                                                    <th class = "col-sm-1 col-md-1 col-lg-1">Contact</th>
                                                                    <th class = "col-sm-1 col-md-1 col-lg-1">Office</th>
                                                              </tr>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="item in commDataHouse| orderBy:'committee_id'|filter: comm_searchHouse|itemsPerPage:10" pagination-id="comm-pg-house">
                                                                    <div class="col-md-1 col-lg-1">
                                                                        <td>
                                                                            <button id="btn-comm-fav" ng-click="FavComm(item)" class="btn btn-info btn-responsive btn-fav">
                                                                                <i ng-if="IsFavComm(item)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                                                                <i ng-if = "!IsFavComm(item)" class="fa fa-star-o fa-lg"  style="color:grey"aria-hidden="true"></i>
                                                                            </button>
                                                                        </td>
                                                                    </div>
                                                                    <div class="col-md-1 col-lg-1">
                                                                        <td>
                                                                            <img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}
                                                                        </td>
                                                                    </div>
                                                                    <div class="col-md-1 col-lg-1">
                                                                        <td>{{item.committee_id|uppercase}}</td>
                                                                    </div>
                                                                    <div class="col-md-6 col-lg-6">
                                                                        <td>{{item.name}}</td>
                                                                    </div>
                                                                    <div class="col-md-1 col-lg-1">
                                                                        <td>{{item.parent_committee_id|uppercase}}</td>
                                                                    </div>
                                                                    <div class="col-md-1 col-lg-1">
                                                                        <td>{{item.phone}}</td>
                                                                    </div>
                                                                    <div class="col-md-1 col-lg-1">
                                                                        <td>{{item.office == null? 'N.A': item.office|uppercase}}</td>
                                                                    </div>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="comm-pg-house" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!---House-->
                                        <!---Senate-->
                                        <div role="tabpanel" id="result-data-comm-senate" class="tab-pane">
                                            <div id="comm-tab-data" class="panel panel-default">
                                                <div id="comm-tab-header" class="well">
                                                    <span id="comm-tab-label">Senate</span>
                                                    <span id="comm-tab-search">
                                             <form class="form-inline">
                                                <input type="text" ng-model="comm_searchSenate" placeholder="Search" value=""/>
                                             </form>
                                          </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="comm-main-table" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <div class="row">
                                                                <tr>
                                                                    <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                                    <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                    <th class="col-sm-1 col-md-1 col-lg-1">Committee ID</th>
                                                                    <th class="col-sm-8 col-md-8 col-lg-8">Name</th>
                                                                    <th class="col-sm-1 col-md-1 col-lg-1">Parent Committee</th>
                                                                </tr>
                                                            </div>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="item in commDataSenate| orderBy:'committee_id'|filter:comm_searchSenate|itemsPerPage:10" pagination-id="comm-pg-senate">
                                                                    <td>
                                                                        <button id="btn-comm-fav" ng-click="FavComm(item,$index)" class="btn btn-info btn-responsive btn-fav">
                                                                            <i ng-if="IsFavComm(item)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                                                            <i ng-if="!IsFavComm(item)" class="fa fa-star-o fa-lg" style="color:grey" aria-hidden="true"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}
                                                                    </td>
                                                                    <td>{{item.committee_id|uppercase}}</td>
                                                                    <td>{{item.name}}</td>
                                                                    <td>{{item.parent_committee_id|uppercase}}</td>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="comm-pg-senate" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!---Senate-->
                                        <!---Joint-->
                                        <div role="tabpanel" id="result-data-comm-joint" class="tab-pane">
                                            <div id="comm-tab-data" class="panel panel-default">
                                                <div id="comm-tab-header" class="well">
                                                    <span id="comm-tab-label">Joint</span>
                                                    <span id="comm-tab-search">
                                             <form class="form-inline">
                                                <input type="text" ng-model="comm_searchJoint" placeholder="Search" value=""/>
                                             </form>
                                          </span>
                                                </div>
                                                <!-- Table -->
                                                <div id="comm-main-table" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Committee ID</th>
                                                                <th class="col-sm-8 col-md-8 col-lg-8">Name</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr dir-paginate="item in commDataJoint| orderBy:'committee_id'|filter: comm_searchJoint|itemsPerPage:10" pagination-id="comm-pg-joint">
                                                                    <td>
                                                                        <button id="btn-comm-fav" ng-click="FavComm(item,$index)" class="btn btn-info btn-responsive btn-fav">
                                                                            <i ng-if="IsFavComm(item)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                                                            <i ng-if="!IsFavComm(item)" class="fa fa-star-o fa-lg" style="color:grey" aria-hidden="true"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}
                                                                    </td>
                                                                    <td>{{item.committee_id|uppercase}}</td>
                                                                    <td>{{item.name}}</td>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                    <center>
                                                        <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" pagination-id="comm-pg-joint" auto-hide="true">
                                                        </dir-pagination-controls>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <!---Joint-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#Committee content -->
                    </div>
                    <!--committee-->
                    <!---Favorites-->
                    <div id="favorites" class="tab-pane">
                        <div class="page-header fav-header">
                            <h3>Favourites</h3>
                        </div>
                        <!-- /#caraousel content -->
                        <div id="fav-carousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <!-- /#Fav content -->
                                <div id="fav-content" class="item active">
                                    <ul class="nav nav-tabs fav-content-tab-header">
                                        <li class="active fav-tab"><a href="#fav-leg" data-toggle="tab">Legislators</a>
                                        </li>
                                        <li class="fav-tab"><a href="#fav-bill" data-toggle="tab">Bills</a>
                                        </li>
                                        <li class="fav-tab"><a href="#fav-comm" data-toggle="tab">Committees</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="fav-tab-content">
                                        <!--Fav legislator-->
                                        <div role="tabpanel" id="fav-leg" class="tab-pane active">
                                            <div id="fav-tab-data" class="panel panel-default">
                                                <div id="fav-tab-header" class="well">
                                                    <span id="fav-tab-label">Favorite Legislators</span>
                                                </div>
                                                <!-- Table -->
                                                <div id="fav-main-table" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Image</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Party</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Name</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">State</th>
                                                                <th class="col-sm-3 col-md-3 col-lg-3">Email</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="item in fav_leg|orderBy: ['state_name','last_name']">
                                                                <td>
                                                                    <button ng-click="legDeleteItem(item)" class="btn btn-info btn-responsive btn-fav btn-del">
                                                                        <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                                <td><img class="leg-img" src="https://theunitedstates.io/images/congress/original/{{item.bioguide_id + '.jpg' }}">
                                                                </td>
                                                                <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.party == 'R'?'r.png':'d.png'}}">
                                                                </td>
                                                                <td>{{ item.last_name + ', ' + item.first_name }}</td>
                                                                <td><img class="leg-img-mem" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">{{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}</td>
                                                                <td>{{item.state_name}}</td>
                                                                <td><a href="mailto:{{item.oc_email}}">{{item.oc_email}}</a></td>
                                                                <td>
                                                                    <button class="btn btn-info btn-responsive" ng-click="viewDetails(item)" href="#fav-carousel" data-slide-to="1">
                                                                        View Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Fav legislator-->
                                        <!--Fav bills-->
                                        <div role="tabpanel" id="fav-bill" class="tab-pane">
                                            <div id="fav-tab-data" class="panel panel-default">
                                                <div id="fav-tab-header" class="well">
                                                    <span id="fav-tab-label">Favourite Bills</span>

                                                </div>
                                                <!-- Table -->
                                                <div id="fav-main-table" class="col-12 col-sm-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Bill ID</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Bill Type</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Title</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Introducted On</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Sponsor</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr ng-repeat="item in fav_bill|orderBy:'last_name'">
                                                                    <td>
                                                                        <button ng-click="billDeleteItem(item)" class="btn btn-info btn-responsive btn-fav btn-del">
                                                                            <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>{{item.bill_id|uppercase}}</td>
                                                                    <td>{{item.bill_type|uppercase}}</td>
                                                                    <td>{{item.official_title}}</td>
                                                                    <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}"> {{item.chamber.substring(0,1).toUpperCase()+item.chamber.substring(1)}}
                                                                    </td>
                                                                    <td>{{item.introduced_on}}</td>
                                                                    <td>{{ item.sponsor.title + ". " + item.sponsor.last_name + ', ' + item.sponsor.first_name }}</td>
                                                                    <td>
                                                                        <button class="btn btn-info btn-responsive" ng-click="viewDetailsBills(item)" href="#fav-carousel" data-slide-to="2">
                                                                            View Details
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!--Fav bill-->
                                        <!-- Fav Comm-->
                                        <div role="tabpanel" id="fav-comm" class="tab-pane">
                                            <div id="fav-tab-data" class="panel panel-default">
                                                <div id="fav-tab-header" class="well">
                                                    <span id="fav-tab-label">Favorite Committees</span>
                                                </div>
                                                <!-- Table -->
                                                <div id="fav-main-table" class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-sm-1 col-md-1 col-lg-1"></th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Chamber</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Committee ID</th>
                                                                <th class="col-sm-6 col-md-6 col-lg-6">Name</th>
                                                                <th class="col-sm-2 col-md-2 col-lg-2">Parent Committee</th>
                                                                <th class="col-sm-1 col-md-1 col-lg-1">Sub Committee</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <div>
                                                                <tr ng-repeat="item in fav_comm|orderBy: 'committee_id'">
                                                                    <td>
                                                                        <button ng-click="commDeleteItem(item)" class="btn btn-info btn-responsive btn-fav btn-del">
                                                                            <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><img class="leg-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{item.chamber == 'house'?'h.png':'s.svg'}}">
                                                                    </td>
                                                                    <td>{{ item.committee_id | uppercase }}</td>
                                                                    <td>{{item.name}}</td>
                                                                    <td>{{item.parent_committee_id|uppercase}}</td>
                                                                    <td>{{item.subcommittee}}</td>
                                                                </tr>
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fav Comm-->
                                    </div>
                                </div>
                                <!-- /#Fav content -->
                                <!-- /#Legislators View Details -->
                                <div id="leg-view-details" class="item">
                                    <div id="leg-view-details-header" class="page-header">
                                        <button id="butn-back" class="btn btn-default" href="#fav-carousel" data-slide-to="0">
                                            <i class="fa fa-chevron-left"></i>
                                        </button>

                                        <span id="details-label">Details</span>
                                        <span>
                                          <button id = "leg-fav-click" ng-click="favLeg(viewDetailsRowData)" class="btn btn-info btn-responsive btn-fav">
                                            <i ng-if="IsFavLeg(viewDetailsRowData)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                            <i ng-if = "!IsFavLeg(viewDetailsRowData)" class="fa fa-star-o fa-lg"  style="color:grey"aria-hidden="true"></i>
                                          </button>
                                        </span>

                                    </div>
                                    <!-- /#View Details Content -->
                                    <div id="leg-view-details-content">
                                        <div class="col-md-6 col-lg-6 table-responsive">
                                            <table id="leg-vd-pd-content" class="table">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="5"><img id="leg-vd-pd-img" src="https://theunitedstates.io/images/congress/original/{{viewDetailsRowData.bioguide_id + '.jpg'}}">
                                                        </td>
                                                        <td>{{ viewDetailsRowData.title + '. ' + viewDetailsRowData.last_name + ', ' + viewDetailsRowData.first_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="mailto:{{ viewDetailsRowData.oc_email }}">{{ viewDetailsRowData.oc_email }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ 'Chamber: ' + viewDetailsRowData.chamber.substring(0,1).toUpperCase()+ viewDetailsRowData.chamber.substring(1) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contact: <span class="phone-no">{{ viewDetailsRowData.phone }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="leg-vd-party-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/{{ viewDetailsRowData.party === 'R'? 'r.png':'d.png'  }}">{{ viewDetailsRowData.party === 'R'? 'Republic':'Democrat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Start Term</th>
                                                        <td>{{ viewDetailsRowData.term_start| date: 'mediumDate' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>End Term</th>
                                                        <td>{{ viewDetailsRowData.term_end | date: 'mediumDate'}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Term</th>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                                    70%
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Office</th>
                                                        <td>{{ viewDetailsRowData.office }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>State</th>
                                                        <td>{{ viewDetailsRowData.state_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fax</th>
                                                        <td class="phone-no">{{ viewDetailsRowData.fax }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Birthday</th>
                                                        <td>{{ viewDetailsRowData.birthday| date: 'mediumDate' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Social Links</th>
                                                        <td>

                                                            <a ng-if="!isNullString(viewDetailsRowData.twitter_id)" href="https://twitter.com/{{viewDetailsRowData.twitter_id}}" target="_blank"><img class="leg-vd-social-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/t.png">
                                                            </a>
                                                            <a ng-if="!isNullString(viewDetailsRowData.facebook_id)" href="https://www.facebook.com/{{viewDetailsRowData.facebook_id}}" target="_blank"><img class="leg-vd-social-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/f.png">
                                                            </a>
                                                            <a ng-if="!isNullString(viewDetailsRowData.website)" href="{{viewDetailsRowData.website}}" target="_blank"><img class="leg-vd-social-img" src="http://cs-server.usc.edu:45678/hw/hw8/images/w.png">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 table-responsive">
                                                    <table id="leg-vd-comm-content" class="table">
                                                        <caption class="h4">Committees</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Chamber</th>
                                                                <th>Committee ID</th>
                                                                <th>Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="item_leg_vd in leg_committees_resultData|limitTo: limitCommitteeData">
                                                                <td>{{item_leg_vd.chamber.substring(0,1).toUpperCase()+ item_leg_vd.chamber.substring(1)}}</td>
                                                                <td>
                                                                    {{item_leg_vd.committee_id}}
                                                                </td>
                                                                <td>
                                                                    {{item_leg_vd.name}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 table-responsive">
                                                    <table id="leg-vd-bill-content" class="table">
                                                        <caption class="h4">Bills</caption>
                                                        <thead>
                                                            <tr>
                                                                <th class="col-md-1 col-lg-1">Bill ID</th>
                                                                <th class="col-md-3 col-lg-3">Title</th>
                                                                <th class="col-md-2 col-lg-2">Chamber</th>
                                                                <th class="col-md-1 col-lg-1">Bill Type</th>
                                                                <th class="col-md-2 col-lg-2">Congress</th>
                                                                <th class="col-md-2 col-lg-2">Link</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="item_leg_vd_bill_content in leg_bills_resultData|limitTo: limitCommitteeData">
                                                                <td>{{item_leg_vd_bill_content.bill_id|uppercase}}</td>
                                                                <td>{{item_leg_vd_bill_content.official_title}}</td>
                                                                <td>{{item_leg_vd_bill_content.chamber}}</td>
                                                                <td>{{item_leg_vd_bill_content.bill_type}}</td>
                                                                <td>{{item_leg_vd_bill_content.congress}}</td>
                                                                <td><a href="{{item_leg_vd_bill_content.last_version.urls.pdf}}" target="_blank">Link</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#View Details Content -->
                                </div>
                                <!-- /#Legislators View Details -->

                                <!-- /#Bills View Details -->
                                <!-- /#Bill View Details -->
                                <div id="bill-view-details" class="item">
                                    <div id="bill-view-details-header" class="page-header">
                                        <span><button  id="bill-butn-back" class = "btn btn-default" href="#fav-carousel" data-slide-to="0">
                                          <i class="fa fa-chevron-left"></i>
                                        </button>
                                      </span>
                                        <span id="bill-details-label">Details</span>
                                        <span>
                                          <button id = "bill-fav-click" ng-click="favBill(viewDetailsBillRowData)" class="btn btn-info btn-responsive btn-fav">
                                            <i ng-if="IsFavBill(viewDetailsBillRowData)" class="fa fa-star fa-lg" style="color:yellow" aria-hidden="true"></i>
                                            <i ng-if = "!IsFavBill(viewDetailsBillRowData)" class="fa fa-star-o fa-lg"  style="color:grey"aria-hidden="true"></i>
                                           </button>
                                        </span>

                                    </div>
                                    <!-- /#Bill View Details Content -->
                                    <div id="bill-view-details-content">
                                        <div id="bill-vd-content" class="col-sm-6 col-md-6 col-lg-6 table-responsive">
                                            <table class="table" height="500px">
                                                <tbody>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Bill ID '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.bill_id| uppercase }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Title '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.official_title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Bill Type '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.bill_type| uppercase }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Sponsor '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.sponsor.title + ". " + viewDetailsBillRowData.sponsor.last_name + ", " + viewDetailsBillRowData.sponsor.first_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Chamber '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.chamber.substring(0,1).toUpperCase()+viewDetailsBillRowData.chamber.substring(1) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Status '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.history.active == false ? 'New': 'Active'}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Introduced On '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.introduced_on |date: 'mediumDate' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Congress URL '}}</th>
                                                        <td class="col-md-5 col-lg-5"><a href="{{  viewDetailsBillRowData.urls.congress }}" target="_blank">URL</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Version Status '}}</th>
                                                        <td class="col-md-5 col-lg-5">{{ viewDetailsBillRowData.last_version.version_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-1 col-lg-1">{{ 'Bill URL '}}</th>
                                                        <td class="col-md-5 col-lg-5"><a href="{{  viewDetailsBillRowData.last_version.urls.pdf }}" target="_blank"> Link</a>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-lg-6" id="bill-vd-pdf">
                                            <object width="100%" height="500px" data="{{viewDetailsBillRowData.last_version.urls.pdf}} "></object>
                                        </div>
                                    </div>
                                    <!--Bill View Details Content -->
                                </div>
                                <!-- Bill View Details -->
                                <!-- Bill View Details -->
                            </div>
                        </div>
                        <!--caraousel content -->
                    </div>
                    <!--Favorites-->
                </div>
            </div>
            <!-- main content container -->
        </div>
        <!-- page-content-->
    </div>
    <!-- Main Content -->
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.angularjs.org/1.4.6/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script type="text/javascript" src="javas.js"></script>
    <script src="dirPagination.js"></script>
    <!-- Scripts -->
    <!-- Menu Toggle Script -->
    <script>
        $("#btnSideBar").click(function(e) {
            e.preventDefault();
            $("#MainPageContent").toggleClass("toggled");
        });
    </script>
</body>

</html>
