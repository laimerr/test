
const select = document.querySelector('select');
const allLang = ['ru', 'en', 'ro'];

select.addEventListener('change', changeURLLanguage);

//Перенаправление на URL с указанием языка
function changeURLLanguage(){
  let lang = select.value;
  location.href = window.location.pathname + '#' + lang;
  location.reload();
}

function changeLanguage(){
  let hash = window.location.hash;
  hash = hash.substr(1);
  console.log(hash);
  if (!allLang.includes(hash)){
    location.href = window.location.pathname + '#ru';
    location.reload();
  }
  select.value = hash;
  document.querySelector('.lng-info').innerHTML = langArr['info'][hash];
    }
changeLanguage();
