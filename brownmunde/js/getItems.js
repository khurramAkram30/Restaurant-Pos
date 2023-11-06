var baseurl="https://pos.matzsolutions.com/api/";
function getDrinksItem (callback) {
var getDrinksItems;
 $.ajax({
        url: `${baseurl}items/read.php?id=1`,
        type: "GET",
        contentType: "application/json",
        success: function (response, status) {
            getDrinksItems = response.response;
            callback(getDrinksItems);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function getFoodItem(callback) {
    $.ajax({
        url: `${baseurl}items/read.php?id=2`,
        type: "GET",
        contentType: "application/json",
        success: function (response, status) {
            var data = response.response;
            callback(data);
            // console.log("2",data);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function getDesertItem(callback) {
    $.ajax({
        url: `${baseurl}items/read.php?id=3`,
        type: "GET",
        contentType: "application/json",
        success: function (response, status) {
            var data = response.response;
            callback(data);
            // console.log("3",data);
        },
        error: function (error) {
            console.log(error);
        }
    });
}
