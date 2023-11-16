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


// testing

function getCategories() {
    $.ajax({
        url: `${baseurl}categories/read.php`,
        type: "GET",
        contentType: "application/json",
        success: function (response, status) {
            datas = response.response;
            displayTable(datas);
            // console.log(response.response);
        },
        error: function (error) {
            console.log(error);
        }
    })
}
function displayTable(data) {
    var catHtml = "";
    data.map(item => {
        catHtml += `
    <button class="" onclick="subCategories(${item.id},'${item.name}')" data-filter=".${item.name}">${item.name}</button>
    `;
    });
    $("#categories").html(catHtml);
}

function subCategories(i,name) {
    var arr=[];
    resizeofrow();
    $.ajax({
        url: `${baseurl}subcategories/read.php?id=${i}`,
        type: "GET",
        contentType: "application/json",
        success: function (response, status) {
            datas = response.response;
            displaySubCategories(datas);
            // console.log(response.response);
        },
        error: function (error) {
            console.log(error);
        }
    });
    for(var j=0;j<dataItem.length;j++){
        // console.log(dataItem[j].Subcategory);
        if(name == dataItem[j].Category){
            arr.push(dataItem[j]);
        }
    }
    displayItems(arr);


}

function displaySubCategories(data) {
    var catHtml = "";
    if(data){
        data.map(item => {
        catHtml += `
    <button class=""  onclick="subCatItem(${item.id},'${item.name}')"  data-filter=".${item.name}">${item.name}</button>
    `;
    });
    $("#subCategories").html(catHtml);
    }
    else{
        $("#subCategories").html("");
    
    }
    
}

function subCatItem(i,name){
    resizeofrow();
    var arr=[];
    for(var j=0;j<dataItem.length;j++){
        // console.log(dataItem[j].Subcategory);
        if(name == dataItem[j].Subcategory){
            arr.push(dataItem[j]);
        }
    }
    displayItems(arr);
}





var dataItem;
function item(){
    $.ajax({
        url: `${baseurl}items/read.php`,
        type: "GET",
        contentType: "application/json",
        success: function (response, status) {
            dataItem = response.response;
            displayItems(dataItem);
            // console.log(response.response);
        },
        error: function (error) {
            console.log(error);
        }
    })
    
}

function displayItems(data){
    var product = "";
    data.map(item => {
        product += `
        <div class="col-lg-4 col-md-6 special-grid ${item.Category} ${item.subCategories}">
                        <div class="gallery-single fix">
                            <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                            <div class="cartItem">
                                <h4><b>${item.name}</b></h4>
                                <!-- <p class="text-center">ladyfingers cooked with fresh tomatoes</p> -->
                                <label class="labelSet" for="">$${item.sell}</label>
                                <button class="btn mb-1 btnset"
                                    onclick="cart(${item.id},'${item.name}',${item.sell},1)">Add To Cart</button>
                            </div>
                        </div>
                    </div>
        `;
    });

    $("#products").html(product);
}


function resizeofrow(){
    setTimeout(function () {
        $("#items-list").css({
            "height": "auto",
            "min-height": "initial",  // Reset min-height if necessary
        });

    }, 0);
}

    // function loadItem(){
    //     $(".special-list").css("height", "auto");
    //     $("#info").css("display", "contents");
    //     $("#table").css("display", "block");
    //     var collectionPrice=$("#collectPrice").val();
    //     var servicePrice=$("#service").val();
    //     var getItem=JSON.parse(sessionStorage.getItem('shoppingCart'));
    //     console.log(getItem);
    //     var tabledata = "", i = 0, subtotal = 0,total=0;
    //     getItem.forEach(item => {
    //         subtotal += item.price;
    //         tabledata += `
    // <tr>
    // <td>${item.productname}</td>
    // <td><input type="text" class="form-control quantity${i}" value="${item.quantity > 0 ? item.quantity : ""}" onkeyup="quantitychange('${i}')"></td>
    // <td>${item.price > 0 ? item.price : ""}</td>
    // <td><a class="btn text-danger btn-sm" onclick="removeObj('${i}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fa fa-trash-o fs-14"></span></a>
    // </td>
  
    // </tr>
    
    // `;
    //         i++;
    //     })
    //     total=parseInt(collectionPrice+servicePrice)+subtotal;
    //     $("#subtotal").val(subtotal);
    //     $("#total").val(total);
    //     $("#cart").html(tabledata);
        
    // }

