const myLink = document.querySelector('.mylink');
const myLogo = document.querySelector('.mylogo');
console.log(document.links[0]);

myLink.addEventListener('click', (e) => {
  setTimeout(()=> {
      window.location = './php/Lister.php';
  }, 550);
});
