const btn=document.getElementById("btn");
	     btn.addEventListener(
            'click',
		function(){
            alert("vous allez ajouter un menu");
            let  text=document.getElementById("text").value;
           let  ul=document.getElementById("menu_list");
           ul.innerHTML+="<li>"+ text+"</li>";
           document.getElementById("text").value="";
		}
         );
         const btn_wipe=document.getElementById("btn_wipe");
	     btn_wipe.addEventListener(
            'click',
		function(){
            let  text2=document.getElementById("text").value;
            alert(text2);
            document.getElementById("text").value="";});

let emploi = document.getElementById('poste');
      emploi.addEventListener('click', (event) => {
            emploi.innerHTML = red;
      }
      window.location.href = 'Cv.HTML';
)
