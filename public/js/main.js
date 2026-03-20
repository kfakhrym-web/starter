// variables
let loginIcon = document.getElementById("loginIcon");
let shopCategoryElement = document.getElementById("shopCategoryElement");
let shopCategoryList = document.getElementById("Shop-Categories-list");
let categoryElement = document.getElementById("categories-element");
let categoryList = document.getElementById("categories-list");
let featuredProducts = document.getElementById("featuredProducts");
let menuBTN = document.getElementById("menu");
let hiddenMenu = document.getElementById("hidden-menu");
let layer = document.getElementById("layer");
let closeMenu = document.getElementById("close-menu");
let cartBtn = document.getElementById("cart-btn");
let hiddenCart = document.getElementById("hidden-cart");
let closeCart = document.getElementById("close-cart");
let wishlistButton = document.getElementById("wishlistButton");
let products = [];

// get products
async function getProducts(){
    let response = await fetch("https://ecommerce.routemisr.com/api/v1/products");
    let finalResponse = await response.json();
    products = finalResponse.data;
    console.log(products)
    showProducts();
}

// show products
function showProducts(){
    let cartona = ``;
    for(let i = 0; i < products.length; i++){
        cartona+=`
            <div class="product">
                <div class="img-container">
                    <img src="${products[i].imageCover}">
                    <div class="product-hover">
                        <i onclick="getWishlist()" class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-shuffle"></i>
                        <i class="fa-solid fa-eye"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </div>
                <div class="col-content">
                    <span>Momax</span>
                    <a>${products[i].title}</a>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(0)</span>
                    </div>
                    <p>${products[i].price}</p>
                </div>
            </div>
        `
    }
    featuredProducts.innerHTML = cartona;
}

getProducts();



// go to login page
loginIcon.addEventListener("click", function(){
    window.location.href = "login.html";
})

// go to wishlist page
wishlistButton.addEventListener("click", function(){
    window.location.href = "wishlist.blade.php";
})

// menu
menuBTN.addEventListener("click", function(){
    hiddenMenu.style.left = "0px";
    layer.style.display = "block";
})
closeMenu.addEventListener("click", function(){
    hiddenMenu.style.left = "-300px";
    layer.style.display = "none";
})

// cart menu
cartBtn.addEventListener("click", function(){
    hiddenCart.style.display = "block";
    layer.style.display = "block";
})
closeCart.addEventListener("click", function(){
    hiddenCart.style.display = "none";
    layer.style.display = "none";
})

// shop categories list
shopCategoryElement.addEventListener("mouseenter", function(){
    shopCategoryList.style.display = "flex";

})
shopCategoryElement.addEventListener("mouseleave", function(){
    shopCategoryList.style.display = "none";
})
shopCategoryList.addEventListener("mouseenter", function(){
    shopCategoryList.style.display = "flex";
})
shopCategoryList.addEventListener("mouseleave", function(){
    shopCategoryList.style.display = "none";
})

// categories list
categoryElement.addEventListener("mouseenter", function(){
    categoryList.style.display = "flex";
})
categoryElement.addEventListener("mouseleave", function(){
    categoryList.style.display = "none";
})
categoryList.addEventListener("mouseenter", function(){
    categoryList.style.display = "flex";
})
categoryList.addEventListener("mouseleave", function(){
    categoryList.style.display = "none";
})








