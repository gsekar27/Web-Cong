

var app = angular.module('MainApp', ['angularUtils.directives.dirPagination']).run(function($rootScope){
$rootScope.fav_leg = JSON.parse(localStorage.getItem("leg")) || [];;
$rootScope.fav_bill=JSON.parse(localStorage.getItem("bill")) || [];;
$rootScope.fav_comm= JSON.parse(localStorage.getItem("comm"))||[];
});


app.controller('congressDBMainController', function congressDBMainController($scope,$rootScope,$http,$filter) {
  //console.log("hihi");
    //$scope.resultData = [];
    $scope.resultDataLegByState = [];
    $scope.resultDataLegByHouse = [];
    $scope.resultDataLegBySenate = [];

    $scope.leg_searchByState = "";
    $scope.leg_searchByHouse = "";
    $scope.leg_searchBySenate = "";

    $http.get('congress.php').success(function(data){
    $scope.resultDataLegByState = data.results;
    $scope.resultDataLegByHouse = $filter('filter')($scope.resultDataLegByState, {chamber:'house'},true);
    $scope.resultDataLegBySenate = $filter('filter')($scope.resultDataLegByState, {chamber:'senate'},true);
    });

    $scope.viewDetails = function(rowItem){
      $scope.limitCommitteeData = 5;
      $scope.progressValue = 0;
      $scope.viewDetailsRowData = rowItem;
      $scope.leg_committees_resultData = [];
      $scope.leg_bills_resultData=[];
      $scope.getCommitteeData = function(){
        //console.log("hello");
        var req = $http({
          method:"post",
          url:"congress.php",
          data:{
            bio_id: rowItem.bioguide_id
          },
          header:{'Content-Type': 'application/json'}
        });

        req.success(function(data){
        $scope.leg_committees_resultData = data.results;
        console.log("hi");
        //console.log($scope.leg_committees_resultData);
      });

      };

      $scope.getBillData = function(){
        //console.log("hello");
        var req = $http({
          method:"post",
          url:"congress.php",
          data:{
            db_name: "leg",
            leg_bill: rowItem.bioguide_id
          },
          header:{'Content-Type': 'application/json'}
        });
        req.success(function(data){
        $scope.leg_bills_resultData = data.results;
        //console.log("hi");
        //console.log($scope.leg_bills_resultData);
      });
      };
      $scope.getCommitteeData();
      $scope.getBillData();
      $scope.progressValue = $scope.getProgressValue(rowItem);
    };

    $scope.bills = function(){
      console.log("inside bill function");
      $scope.billData = [];
      $scope.NewBillData = [];
      $scope.getActiveBillData = function(){
        //console.log("inside bill function");
        //console.log("hello");
        var req = $http({
          method:"post",
          url:"congress.php",
          data:{
            db_name: "bill"
          },
          header:{'Content-Type': 'application/json'}
        });
        req.success(function(data){
        $scope.billData = data.results;
        console.log("hi");
        console.log($scope.billData);
      });
      };
      $scope.getNewBillData = function(){
        //console.log("inside bill function");
        //console.log("hello");
        var req = $http({
          method:"post",
          url:"congress.php",
          data:{
            db_name: "bill_new"
          },
          header:{'Content-Type': 'application/json'}
        });

        req.success(function(data){
        $scope.NewBillData = data.results;
        console.log("hi");
        console.log($scope.NewBillData);
      });
      };
      $scope.getActiveBillData();
      $scope.getNewBillData();


    };

    $scope.viewDetailsBills = function(rowItem){
      $scope.viewDetailsBillRowData=[];
      $scope.viewDetailsBillRowData = rowItem;
    };

    $scope.committee = function(){

      $scope.commDataResult = [];
      $scope.commDataHouse = [];
      $scope.commDataSenate = [];
      $scope.commDataJoint = [];
      $scope.getCommTabData = function(){
        console.log("inside comm function");
        //console.log("hello");
        var req = $http({
          method:"post",
          url:"congress.php",
          data:{
            db_name: "comm"
          },
          header:{'Content-Type': 'application/json'}
        });

        req.success(function(data){
        $scope.commDataResult = data.results;
        $scope.commDataHouse = $filter('filter')($scope.commDataResult, {chamber:'house'},true);
        $scope.commDataSenate = $filter('filter')($scope.commDataResult, {chamber:'senate'},true);
        $scope.commDataJoint = $filter('filter')($scope.commDataResult, {chamber:'joint'},true);

      });
      };
      $scope.getCommTabData();


    };
    $scope.addLegToFav = function(legRowData){
      console.log("adding to array leg");

      $rootScope.fav_leg.push(legRowData);
      localStorage.setItem("leg", JSON.stringify($rootScope.fav_leg));
      console.log($rootScope.fav_leg);
    };
    $scope.addBillToFav = function(billRowData){
      console.log("adding to array bill");

      $rootScope.fav_bill.push(billRowData);
      localStorage.setItem("bill", JSON.stringify($rootScope.fav_bill));
      console.log($rootScope.fav_bill);
    };
    $scope.addCommToFav = function(commRowData){

        $rootScope.fav_comm.push(commRowData);
        localStorage.setItem("comm", JSON.stringify($rootScope.fav_comm));
        //console.log($rootScope.fav_comm);

    };
    $scope.FavComm = function(commRowData,index){
      if(!$scope.IsFavComm(commRowData)){
        //Add to Fav
        $scope.addCommToFav(commRowData);
      }
      else{
        //delete from fav
        console.log('deleting');
        var ind= $scope.getCommIndex(commRowData);
        if(ind!= -1){
            $scope.commDeleteItem(ind);
        }
      }

    };
    $scope.favLeg = function(legRowData){

      if(!$scope.IsFavLeg(legRowData)){
        //Add to Fav
        console.log('adding');
        $scope.addLegToFav(legRowData);
      }
      else{
        //delete from fav
        console.log('deleting');
        var ind= $scope.getLegIndex(legRowData);
        if(ind!= -1){
            $scope.legDeleteItem(ind);
        }
      }

    };
    $scope.favBill = function(billRowData){
      if(!$scope.IsFavBill(billRowData)){
        //Add to Fav
        $scope.addBillToFav(billRowData);
      }
      else{
        //delete from fav
        console.log('deleting');
        var ind= $scope.getBillIndex(billRowData);
        if(ind!= -1){
            $scope.billDeleteItem(ind);
        }
      }

    };
    $scope.IsFavComm = function(commRowData){
      $scope.temp = [];
      $scope.temp = $filter('filter')($rootScope.fav_comm, {committee_id:commRowData.committee_id},true);
      //console.log($rootScope.fav_comm,commRowData.committee_id,$scope.temp.length);
      return ($scope.temp.length > 0);
    }


    $scope.IsFavLeg = function(legRowData){
      //console.log("hiiiiii");
      $scope.temp = [];
      $scope.temp = $filter('filter')($rootScope.fav_leg, {bioguide_id:legRowData.bioguide_id},true);
      //console.log($rootScope.fav_leg,legRowData.bioguide_id,$scope.temp.length);
      return ($scope.temp.length > 0);
    }

    $scope.IsFavBill = function(billRowData){
      $scope.temp = [];
      $scope.temp = $filter('filter')($rootScope.fav_bill, {bill_id:billRowData.bill_id},true);
      //console.log($rootScope.fav_bill,billRowData.bill_id,$scope.temp.length);
      return ($scope.temp.length > 0);
    }

    $scope.legDeleteItem = function(legRwData){
      var ind = $scope.getLegIndex(legRwData);
      $rootScope.fav_leg.splice(ind,1);
    //  console.log($rootScope.fav_leg);
       localStorage.setItem("leg", JSON.stringify($rootScope.fav_leg))||[];

    };
    $scope.billDeleteItem = function(billRwData){
      var ind = $scope.getBillIndex(billRwData);
      $rootScope.fav_bill.splice(ind,1);
      //console.log($rootScope.fav_bill);
       localStorage.setItem("bill", JSON.stringify($rootScope.fav_bill))||[];

    };
    $scope.commDeleteItem = function(commRwData){
      //console.log("heyyyy");
      var ind = $scope.getCommIndex(commRwData);
      $rootScope.fav_comm.splice(ind,1);
      //console.log($rootScope.fav_comm);
       localStorage.setItem("comm", JSON.stringify($rootScope.fav_comm));
       //$rootScope.fav_comm= JSON.parse(localStorage.getItem("comm"))||[];

    };

    $scope.getCommIndex = function(commRowData){

      var arr_favComm = $rootScope.fav_comm;
      var res;
      console.log(arr_favComm);
      for(var k = 0; k < arr_favComm.length; k++)
      {
        // console.log(arr_favComm[k]['committee_id']);
        // console.log(commRowData.committee_id);
        if(arr_favComm[k]['committee_id']== commRowData.committee_id){
          return k;
        }
      }
      return -1;
    };

    $scope.getLegIndex = function(legRowData){
      var arr_favLeg = $rootScope.fav_leg;
      var res;
      console.log(arr_favLeg);
      for(var k = 0; k < arr_favLeg.length; k++)
      {
        // console.log(arr_favComm[k]['committee_id']);
        // console.log(commRowData.committee_id);
        if(arr_favLeg[k]['bioguide_id']== legRowData.bioguide_id){
          return k;
        }
      }
      return -1;
    };

    $scope.getBillIndex = function(billRowData){
      var arr_favBill = $rootScope.fav_bill;
      var res;
      console.log(arr_favBill);
      for(var k = 0; k < arr_favBill.length; k++)
      {
        // console.log(arr_favComm[k]['committee_id']);
        // console.log(commRowData.committee_id);
        if(arr_favBill[k]['bill_id']== billRowData.bill_id){
          return k;
        }
      }
      return -1;
    };
    $scope.isNullString = function(str){
      console.log(str);
      console.log(str===null || str ==="" || str ===undefined);

      return (str===null || str ==="" || str ===undefined);
    };

    $scope.favLegIconClass = function(item){
      if(IsFavLeg(item)){
        console.log("fa fa-star-o fa-lg");
        return "fa fa-star-o fa-lg";
      }
      else {
        console.log("fa fa-star fa-lg");
        return "fa fa-star fa-lg";
      }

    };

    $scope.getProgressValue = function(legVdItem){
      var str_start = legVdItem.term_start;
      var str_end = legVdItem.term_end;
      var start = new Date(str_start);
      var end = new Date(str_end);
      var now = new Date();

      var dr_time_diff = Math.abs(end.getTime() - start.getTime());

      var dr_diffDays = Math.ceil(dr_time_diff / (1000 * 3600 * 24));
      var nr_time_diff = Math.abs(now.getTime() - start.getTime());

      var nr_diffDays = Math.ceil(nr_time_diff / (1000 * 3600 * 24));

      var num = Math.round((nr_diffDays/dr_diffDays)*100);

      //console.log(num);
      return num;



    };
});
