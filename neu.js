// variables
const generalBtn = document.getElementById("general");
const businessBtn = document.getElementById("business");
const sportsBtn = document.getElementById("sport");
const entertainmentBtn = document.getElementById("entertainment");
const technologyBtn = document.getElementById("technology");
const stocksBtn = document.getElementById("stocks");
const cryptoBtn = document.getElementById("crypto");
const headlinesBtn = document.getElementById("headlines");
const countryBtn = document.getElementsByClassName("country");
const searchBtn = document.getElementById("searchBtn");

const newsQuery = document.getElementById("newsQuery");
const newsType = document.getElementById("newsType");
const newsdetails = document.getElementById("newsdetails");
var country="in";
var countryhtml="India";

// Array

var newsDataArr = [];
datePickerId.max = new Date().toISOString().split("T")[0];
datePickerId1.max = new Date().toISOString().split("T")[0];
datePickerId.value = new Date().toISOString().split("T")[0];
datePickerId1.value = new Date().toISOString().split("T")[0];
var currentDate = new Date().toISOString().split("T")[0];
const datefrm = document.getElementById("datePickerId1");
const dateto = document.getElementById("datePickerId");

console.log(datefrm.value);
console.log(currentDate);

// apis 

// const API_KEY = "your_api_key";

window.onload = function () {
    newsType.innerHTML = "<h4>Headlines "+countryhtml+"</h4>";
    fetchHeadlines1();
};

headlinesBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>Headlines "+countryhtml+"</h4>";
    fetchHeadlines1();
});

generalBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>General news "+countryhtml+"</h4>";
    fetchGeneralNews();
});

businessBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>Business "+countryhtml+"</h4>";
    fetchBusinessNews();
});

sportsBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>Sports "+countryhtml+"</h4>";
    fetchSportsNews();
});

entertainmentBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>Entertainment "+countryhtml+"</h4>";
    fetchEntertainmentNews();
});

technologyBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>Technology "+countryhtml+"</h4>";
    fetchTechnologyNews();
});


stocksBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>stocks</h4>";
    fetchstocksNews();
});

cryptoBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>crypto</h4>";
    fetchcryptoNews();
});

searchBtn.addEventListener("click", function () {
    newsType.innerHTML = "<h4>Search : " + newsQuery.value + "</h4>";
    fetchQueryNews();
});

const date1 = async() => {
    datePickerId.min = datefrm.value;
}

const fetchHeadlines = async (e) => {
    console.log(e.target.value);
    countryhtml=e.target.innerHTML;
    newsType.innerHTML = "<h4>Headlines "+countryhtml+"</h4>";
    country=e.target.value;
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }

    displayNews();
}

const fetchHeadlines1 = async () => {
    newsType.innerHTML = "<h4>Headlines "+countryhtml+"</h4>";
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }

    displayNews();
}

const fetchcryptoNews = async () => {
    const response = await fetch("https://newsapi.org/v2/everything?q=crypto&from="+datefrm.value+"&to="+dateto.value+"&apiKey="+API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchstocksNews = async () => {
    console.log(datefrm.value);
    const response = await fetch("https://newsapi.org/v2/everything?q=stocks&from="+datefrm.value+"&to="+dateto.value+"&apiKey="+API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchGeneralNews = async () => {
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&category=general&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchBusinessNews = async () => {
    console.log(country)
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&category=business&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchEntertainmentNews = async () => {
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&category=entertainment&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchSportsNews = async () => {
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&category=sports&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchTechnologyNews = async () => {
    const response = await fetch("https://newsapi.org/v2/top-headlines?country=" + country + "&category=technology&pageSize=8&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

const fetchQueryNews = async () => {

    if (newsQuery.value == null)
        return;

    const response = await fetch("https://newsapi.org/v2/everything?q=" + encodeURIComponent(newsQuery.value) + "&from=" + datefrm.value + "&to="+dateto.value+"&apiKey=" + API_KEY);
    newsDataArr = [];
    if (response.status >= 200 && response.status < 300) {
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    } else {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }
    displayNews();
}

function displayNews() {

    newsdetails.innerHTML = "";

    if(newsDataArr.length == 0) {
        newsdetails.innerHTML = "<h5>No data found.</h5>"
        return;
    }

    newsDataArr.forEach(news => {

        var date = news.publishedAt.split("T");

        var col = document.createElement('div');
        col.className = "col-sm-12 col-md-4 col-lg-3 p-2 card";

        var card = document.createElement('div');
        card.className = "p-2";

        var image = document.createElement('img');
        image.setAttribute("height", "matchparent");
        image.setAttribute("width", "100%");
        image.src = news.urlToImage;

        var cardBody = document.createElement('div');

        var newsHeading = document.createElement('h5');
        newsHeading.className = "card-title text-dark";
        newsHeading.innerHTML = news.title;

        var dateHeading = document.createElement('h6');
        dateHeading.className = "text-primary";
        dateHeading.innerHTML = date[0];

        var discription = document.createElement('p');
        discription.className = "text-muted";
        discription.innerHTML = news.description;

        var link = document.createElement('a');
        link.className = "btn btn-dark";
        link.setAttribute("target", "_blank");
        link.href = news.url;
        link.innerHTML = "Read more";

        cardBody.appendChild(newsHeading);
        cardBody.appendChild(dateHeading);
        cardBody.appendChild(discription);
        cardBody.appendChild(link);

        card.appendChild(image);
        card.appendChild(cardBody);

        col.appendChild(card);

        newsdetails.appendChild(col);
    });

}
