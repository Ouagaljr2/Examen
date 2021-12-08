let section = document.getElementById('comments');

document.getElementById("voir")
        .addEventListener('click', () => {
          fetch('http://localhost:8000/api.php')
            .then((response) => {
                response.json()
                        .then((comment) => {

                            console.log(comment)
                            comment.forEach((comment) => {

                            let Article = document.createElement('article')

                            let p1 = document.createElement('p')
                            p1.innerText = comment.username

                            let p2 = document.createElement('p')
                            p.innerText = comment.comment

                            Article.appendChild(p1)
                            Article.appendChild(p2)

                            section.appendChild(Article)

                            }) 
                      
                        })
                        .catch((error) => {
                          console.log(error)
                        })
              
            })
            .catch((error) => {
              console.log(error)
            })
        })