const toggleChildsContainer = (e) => {

  const toToggle = document.getElementById(e.target.className);
  e.target.innerText = e.target.innerText == "-"? '+' : '-' ;
  toToggle.classList.toggle('hidden');
  
}

const buildNest = (nest) => {

  const tree = document.getElementById(nest.nest_parent);    
  // if(nest.nest_parent != 0) {

  //   const plusButton = document.createElement('button');
  //   plusButton.className = nest.nest_id;
  //   plusButton.innerText = '+';
  //   plusButton.addEventListener('click', toggleChildsContainer);
  //   tree.append(plusButton);

  // }
  
  const treeContainer = document.createElement('section');
  treeContainer.className = 'treecontainer';
 
  treeContainer.id = nest.nest_id;
  tree.append(treeContainer);
  
  const nestTitle = document.createElement('div');
  nestTitle.className = 'text';
  nestTitle.innerText = "Название: " + nest.nest_title;
  treeContainer.append(nestTitle);

  const nestDesc = document.createElement('div');
  nestDesc.className = 'text';
  nestDesc.innerText = "Описание: " + nest.nest_desc;
  treeContainer.append(nestDesc);

  const nestNumber = document.createElement('div');
  nestNumber.className = 'text';
  nestNumber.innerText = "номер: " + nest.nest_id;
  treeContainer.append(nestNumber); 

}

const buildTrees = (trees) => {

  if(trees){
     trees.map(buildNest);
    }

}

const startFetch = () => {
  
  fetch("inc/nest.inc.php")
    .then(response => response.json())
    .then(result => buildTrees(result))
    .catch(error => console.log('error', error));

};

startFetch();