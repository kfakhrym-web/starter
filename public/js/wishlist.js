let products = [];

async function getWishlist(){
    let response = await fetch("https://ecommerce.routemisr.com/api/v1/wishlist", 
        {
            method: "GET",
            headers: 
            {
                "content-type": "application/json",
                token: localStorage.getItem("token")
            }
        }
    );

    let finalResponse = await response.json();
    products = finalResponse.data;
    console.log(products)
    // displayWishlistProducts();    
}

// function displayWishlistProducts(){
//     let cartona = ``;
//     for(let i = 0; i < products.length; i++){
//         cartona += 
//         `
//                         <div class="col-2">
//                             <div class="col-content">
//                                 <img src="${products[i].imageCover}" alt="${products[i].title}">
//                                 <a href="#">${products[i].title}</a>
//                                 <p>${products[i].price}</p>
//                                 <button>Add To Cart</button>
//                             </div>
//                         </div>
//         `
//     }
//     document.getElementById("wishlistContainer").innerHTML = cartona;
// }

// document.addEventListener("DOMContentLoaded", function () {
//     getWishlist();
// });