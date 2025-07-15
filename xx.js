		
	const blogConatainer=document.querySelector('.blog')
	let all=''
	fetch('blog.json')
	.then(response => response.json())
	.then(data => {
		for (const post of data.posts){
			all+=`
	<div class="blog-row">
		<div class="img-blog"></div>
		<div class="text-content">
			<div class="blog-title">${post.title}</div>
			<div class="blog-author">${post.author}</div>
			<div class="blog-content">${post.content}</div>
			<div class="blog-date">${post.date}</div>
		</div>
	</div>  
			`
		}

		blogConatainer.innerHTML=all
	})

