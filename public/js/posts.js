var addedCategoriesText;
var addedCategoriesIDs;

var docReady=setInterval(function() {
	if(document.readyState !== "complete"){
		return;
	}
	clearInterval(docReady);
    
    var addCategoryBtn=document.getElementsByClassName('btn')[0];
    addedCategoriesIDs=document.getElementById('categories');
    addCategoryBtn.addEventListener('click',addCategoryToPost);
    addedCategoriesText=document.getElementsByClassName('added-categories')[0];

    for(i=0; i < addedCategoriesText.firstElementChild.children.length; i++){
    	addedCategoriesText.firstElementChild.children[i].firstElementChild.addEventListener('click',removeCategoryFromPost);
    }

}, 100);

function addCategoryToPost(event){
	event.preventDefault();
	var select=document.getElementById('category_select');
	var selectedCategoryId=select.options[select.selectedIndex].value;
	var selectedCategoryName=select.options[select.selectedIndex].text;

	if(addedCategoriesIDs.value.split(",").indexOf(selectedCategoryId) != -1){
		return;
	}
    if(addedCategoriesIDs.value.length > 0){
    	addedCategoriesIDs.value=addedCategoriesIDs.value + "," + selectedCategoryId;
    }
    else{
    	addedCategoriesIDs.value=selectedCategoryId;
    }

    var newCategoryLi=document.createElement('li');
    var newCategoryLink=document.createElement('a');
    newCategoryLink.href="#";
    newCategoryLink.innerText=selectedCategoryName;
    newCategoryLink.dataset['category_id']=selectedCategoryId;
    newCategoryLink.addEventListener('click',removeCategoryFromPost);

    newCategoryLi.appendChild(newCategoryLink);
    addedCategoriesText.firstElementChild.appendChild(newCategoryLi);
}

function removeCategoryFromPost(event){
    event.preventDefault();
    event.target.removeEventListener('click',removeCategoryFromPost);
    var categoryId=event.target.dataset['category_id'];
    var categoryIDArray=addedCategoriesIDs.value.split(",");
    var index=categoryIDArray.indexOf(categoryId);
    categoryIDArray.splice(index,1);
    var newCategoriesIDs=categoryIDArray.join(',');
    addedCategoriesIDs.value=newCategoriesIDs;
    event.target.parentElement.remove();
}