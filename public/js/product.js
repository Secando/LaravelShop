let productsList = document.querySelector('#productsList')
let productEdit = document.querySelector('#productEdit')
let contentWrapper = document.querySelector('.content-wrapper')
let underEdit = document.querySelector('#underEdit');
let productEditEnglishName = document.querySelector('#productEditEnglishName');
let productEditAuthor = document.querySelector('#productEditAuthor');
let productEditCost = document.querySelector('#productEditCost');
let productEditDescr = document.querySelector('#productEditDescr');
let productEditImg = document.querySelector('#productEditImg');
let productEditISBN = document.querySelector('#productEditISBN');
let productEditPageCount = document.querySelector('#productEditPageCount');
let productEditRusName = document.querySelector('#productEditRusName');


getProducts();
function updateUI(){
    productsList = document.querySelector('#productsList')

}

let products =[];
function getProducts() {
    fetch('http://localhost:8000/api/admin/products', {method: 'GET'})
        .then((response) => {
            return response.json()
        })
        .then((data) => {
            data.products.forEach(function(elem,i){
               productsList.insertAdjacentHTML('beforeend',
                    `<div style='display: flex; flex-direction: row; width: 800px;justify-content: space-between; box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.26); padding:20px;height: 120px; border-radius: 5px'>
                            <a href="product.html"><img src="http://localhost:8000/storage/${elem.image_path}" width="60px"></a>
                            <div style="display: flex"><div>id:</div><div id="productId">${elem.id}</div></div>
                            <div style="width: 200px">${elem.english_name } / ${elem.rus_name} </div>
                            <button id="editProduct">Редактировать</button>
                            <button id="deleteProduct">Удалить</button>
                         </div>`);
                products.push(Object.values([elem.id ,productsList.children[i], elem]));

                console.log(products)
                //delete button
                productsList.children[i].children.deleteProduct.addEventListener('click',function (){
                    products[i][1].remove();
                    fetch(`http://localhost:8000/api/admin/products/delete/${products[i][0]}` ,{method: 'DELETE'});

                });
                //delete button


                //edit button
                productsList.children[i].children.editProduct.addEventListener('click',function (){
                    productEdit.style.display = 'block';
                    underEdit.style.display = 'block';
                    contentWrapper = document.querySelector('.content-wrapper')
                    console.log(products[i]);

                });

                //edit button
            });
            updateUI()

        });
}

underEdit.addEventListener('click',function (){
    if(underEdit.style.display === 'block'){
        underEdit.style.display = 'none';
        productEdit.style.display = 'none';
    }
})



