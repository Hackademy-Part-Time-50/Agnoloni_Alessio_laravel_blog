import './bootstrap';

const articlesList = document.getElementById('articles-list');

fetch('http://127.0.0.1:8000/api/articles')
    .then(response => response.json())
    .then(data =>{
        data.forEach(item => {
            articlesList.innerHTML += `<li>${item.title}</li>`;
        });
    })
    .catch(error => {
        articlesList.innerHTML += `<li class="text-danger">Errore</li>`;
    });