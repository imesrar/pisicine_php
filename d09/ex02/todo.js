var i = 0;

if (document.cookie && document.cookie != '') {
       var split = document.cookie.split(';');
       for (var i = 0; i < split.length; i++) {
               var id_name = split[i].split("=");

               var parentElement = document.getElementById("ft_list");
               var firstChild = parentElement.firstChild;
              // create a new div element 
               var added = document.createElement("div");
              // specifie an id to the new div element 
               added.setAttribute("id", id_name[0].trim());
               added.setAttribute("onclick", "del('" + id_name[0].trim() + "');");
              // and give it some content 
               var text = document.createTextNode(decodeURIComponent(id_name[1]));
              // add the text node to the newly created div
               added.appendChild(text);
              // add the newly created element and its content into the DOM       
               parentElement.insertBefore(added, firstChild);
               var number = id_name[0].split('o');
               var nbr = parseInt(number[2]);
       }
}

if (nbr > 0)
       i = nbr + 1;

function add() {
              var todo = prompt("What do you want to add?");
       if (todo !=='' && todo.replace(/\s+/g, '').length)  //  \s whitespace /g global
       {
              var parentElement = document.getElementById("ft_list");
              var firstChild = parentElement.firstChild;
              // create a new div element 
              var added = document.createElement("div");
              // specifie an id to the new div element 
              added.setAttribute("id", "todo" + i);
              added.setAttribute("onclick", "del('todo" + i + "');");
              // and give it some content 
               var text = document.createTextNode(todo);
              // add the text node to the newly created div
               added.appendChild(text);
              // add the newly created element and its content into the DOM 
              parentElement.insertBefore(added, firstChild);

              document.cookie = "todo" + i + "=" + encodeURIComponent(todo) + ";";

              i++;
       }
}

function del(id) {
       if (confirm("Are you really going to delete this wonderful task?!")) {
               var list = document.getElementById("ft_list");
               var div = document.getElementById(id);
               list.removeChild(div);
               document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
       }
}