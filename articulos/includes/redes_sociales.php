
<div class="blog-share">
	<h4>Compartir Post:</h4>
	<a href="https://www.facebook.com/sharer/sharer.php?u=" class="facebook"><i class="fa fa-facebook"></i></a>
	<a href="https://twitter.com/intent/tweet?text=[]&url=[url]&hashtags=[hashtag]" class="twitter"><i class="fa fa-twitter"></i></a>
	<a href="https://api.whatsapp.com/send?text=[text]" class="whatsapp" style="background-color: #25d366">W</a>
</div>

<script type="text/javascript">
	var dir = window.document.URL;
	var tit = window.document.title;
	document.querySelector('.facebook').href += dir;
	document.querySelector('.twitter').href = `https://twitter.com/intent/tweet?text=${tit}&url=${dir}&hashtags=Social_Students`;
	document.querySelector('.whatsapp').href = `https://api.whatsapp.com/send?text=Me interesa el tema ${tit} tu tambien deberias leerlo ${dir}`;
</script>