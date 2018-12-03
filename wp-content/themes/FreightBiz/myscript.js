// var url = 'https://newsapi.org/v2/top-headlines?' +
//           'country=us&' +
//           'apiKey=18087e89bd0441389346dcc06d0c3b87';
// var req = new Request(url);
// fetch(req)
//     .then(function(response) {
//         console.log(response.json());
//     })


//  var url = 'https://newsapi.org/v2/top-headlines?' +
//           'sources=bbc-news&' +
//           'apiKey=18087e89bd0441389346dcc06d0c3b87';
// var req = new Request(url);
// fetch(req)
//     .then(function(response) {
//         console.log(response.json());
//     })



// var url = 'https://newsapi.org/v2/everything?' +
// 		  'sources=bbc-news&' +
//           'q=Logistics&' +
//           'from=2018-12-03&' +
//           'sortBy=popularity&' +
//           'apiKey=18087e89bd0441389346dcc06d0c3b87

var url = 'https://newsapi.org/v2/top-headlines?country=nz&apiKey=ff663ca5c45642cdbbe97577a26d9454'


$.ajax({
  url:url,
  method: "GET",
  success: function(data) {
    var articles = data.articles;

    _(articles).each(function(article){
    	console.log(article);

    	if(article.urlToImage && article.description){

 
	    	$(`<div class="news">
			   <div class="news-header"><a href="<?php the_field('header'); ?>">`+article.title+`</a></div>
			   <div class="news-block">
			    <div class="news-image"><a href="">
			      <img src="`+article.urlToImage+`" alt="">
			    </a>
			    </div>

			    <div class="news-content">`+article.description+`
			    </div>

			    <div class="news-bottom">
			      <div class="news-date">`+article.publishedAt+`</div>
			      <div class="news-source"><a href="`+article.url+`">`+article.source.name+`</a></div>
			    </div>

			   </div>     
			</div>`).appendTo('.home-news');
		}
    });
  }
});