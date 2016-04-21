function getSearchInput(){
         var maskInput = $("#search_words").val();
         if (maskInput == '') {
            return false;
         }      
         
         var cStart = $("#count_chars").val();
         var countChars = maskInput.replace(/\s+/g, "").length;
         if(countChars != 0)
         {
            var cStartw = $("#re_chars").val();
            var searchInput = $("#search_words").val();
         }
         else
         {
            var cStartw = "";
            var searchInput = "";
         }
         if(cStart != countChars || cStartw != searchInput)
         {  
            $.ajax({
               url:'index.php?a=ajax_request',
               type:'POST',
               data:{search_words:searchInput,
                     a:'ajax_request'},
               success: function(data){                            
                           $('#search_result').html(data); 
                        },
               error: function(jqXHR, exception)
                     {
                        if (jqXHR.status === 0) {
                           alert('НЕ подключен к интернету!');
                        } else if (jqXHR.status == 404) {
                           alert('НЕ найдена страница запроса [404])');
                        } else if (jqXHR.status == 500) {
                           alert('НЕ найден домен в запросе [500].');
                        } else if (exception === 'parsererror') {
                           alert("Ошибка в коде: \n"+jqXHR.responseText);
                        } else if (exception === 'timeout') {
                           alert('Не ответил на запрос.');
                        } else if (exception === 'abort') {
                           alert('Прерван запрос Ajax.');
                        } else {
                           alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                        }
                     },
               dataType:"text",        
            }); 
   
            $("#count_chars").val(countChars);
            $("#re_chars").val(searchInput);
         }
}
      
function getSearchTitle(){
         var maskInput = $("#search_title").val();
         if (maskInput == '') {
            return false;

         }
         var cStart = $("#count_chars_title").val();
         var countChars = maskInput.replace(/\s+/g, "").length;
         if(countChars != 0)
         {
            var cStartw = $("#re_chars_title").val();
            var searchInput = $("#search_title").val();
         }
         else
         {
            var cStartw = "";
            var searchInput = "";
         }
         if(cStart != countChars || cStartw != searchInput)
         {  
            $.ajax({
               url:'index.php?a=ajax_request',
               type:'POST',
               data:{search_title:searchInput,
                     a:'ajax_request'},
               success: function(data){                            
                           $('#search_result').html(data); 
                        },
               error: function(jqXHR, exception)
                     {
                        if (jqXHR.status === 0) {
                           alert('НЕ подключен к интернету!');
                        } else if (jqXHR.status == 404) {
                           alert('НЕ найдена страница запроса [404])');
                        } else if (jqXHR.status == 500) {
                           alert('НЕ найден домен в запросе [500].');
                        } else if (exception === 'parsererror') {
                           alert("Ошибка в коде: \n"+jqXHR.responseText);
                        } else if (exception === 'timeout') {
                           alert('Не ответил на запрос.');
                        } else if (exception === 'abort') {
                           alert('Прерван запрос Ajax.');
                        } else {
                           alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                        }
                     },
               dataType:"text",        
            }); 
         
            $("#count_chars_title").val(countChars);
            $("#re_chars_title").val(searchInput);
         }
}
function getSearchContent(){
         var maskInput = $("#search_content").val();
         if (maskInput == '') {
            return false;

         }
         var cStart = $("#count_chars_content").val();
         var countChars = maskInput.replace(/\s+/g, "").length;
         if(countChars != 0)
         {
            var cStartw = $("#re_chars_content").val();
            var searchInput = $("#search_content").val();
         }
         else
         {
            var cStartw = "";
            var searchInput = "";
         }
         if(cStart != countChars || cStartw != searchInput)
         {  
            $.ajax({
               url:'index.php?a=ajax_request',
               type:'POST',
               data:{search_content:searchInput,
                     a:'ajax_request'},
               success: function(data){                            
                           $('#search_result').html(data); 
                        },
               error: function(jqXHR, exception)
                     {
                        if (jqXHR.status === 0) {
                           alert('НЕ подключен к интернету!');
                        } else if (jqXHR.status == 404) {
                           alert('НЕ найдена страница запроса [404])');
                        } else if (jqXHR.status == 500) {
                           alert('НЕ найден домен в запросе [500].');
                        } else if (exception === 'parsererror') {
                           alert("Ошибка в коде: \n"+jqXHR.responseText);
                        } else if (exception === 'timeout') {
                           alert('Не ответил на запрос.');
                        } else if (exception === 'abort') {
                           alert('Прерван запрос Ajax.');
                        } else {
                           alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                        }
                     },
               dataType:"text",        
            }); 
         
            $("#count_chars_content").val(countChars);
            $("#re_chars_content").val(searchInput);
         }
}
function getSearchCreate_at(){
         var maskInput = $("#search_create_at").val();
         if (maskInput == '') {
            return false;

         }
         var cStart = $("#count_chars_create_at").val();
         var countChars = maskInput.replace(/\s+/g, "").length;
         if(countChars != 0)
         {
            var cStartw = $("#re_chars_create_at").val();
            var searchInput = $("#search_create_at").val();
         }
         else
         {
            var cStartw = "";
            var searchInput = "";
         }
         if(cStart != countChars || cStartw != searchInput)
         {  
            $.ajax({
               url:'index.php?a=ajax_request',
               type:'POST',
               data:{search_create_at:searchInput,
                     a:'ajax_request'},
               success: function(data){                            
                           $('#search_result').html(data); 
                        },
               error: function(jqXHR, exception)
                     {
                        if (jqXHR.status === 0) {
                           alert('НЕ подключен к интернету!');
                        } else if (jqXHR.status == 404) {
                           alert('НЕ найдена страница запроса [404])');
                        } else if (jqXHR.status == 500) {
                           alert('НЕ найден домен в запросе [500].');
                        } else if (exception === 'parsererror') {
                           alert("Ошибка в коде: \n"+jqXHR.responseText);
                        } else if (exception === 'timeout') {
                           alert('Не ответил на запрос.');
                        } else if (exception === 'abort') {
                           alert('Прерван запрос Ajax.');
                        } else {
                           alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                        }
                     },
               dataType:"text",        
            }); 
         
            $("#count_chars_create_at").val(countChars);
            $("#re_chars_create_at").val(searchInput);
         }
}      

function getSearchUpdate_at(){
         var maskInput = $("#search_update_at").val();
         if (maskInput == '') {
            return false;

         }
         var cStart = $("#count_chars_update_at").val();
         var countChars = maskInput.replace(/\s+/g, "").length;
         if(countChars != 0)
         {
            var cStartw = $("#re_chars_update_at").val();
            var searchInput = $("#search_update_at").val();
         }
         else
         {
            var cStartw = "";
            var searchInput = "";
         }
         if(cStart != countChars || cStartw != searchInput)
         {  
            $.ajax({
               url:'index.php?a=ajax_request',
               type:'POST',
               data:{search_update_at:searchInput,
                     a:'ajax_request'},
               success: function(data){                            
                           $('#search_result').html(data); 
                        },
               error: function(jqXHR, exception)
                     {
                        if (jqXHR.status === 0) {
                           alert('НЕ подключен к интернету!');
                        } else if (jqXHR.status == 404) {
                           alert('НЕ найдена страница запроса [404])');
                        } else if (jqXHR.status == 500) {
                           alert('НЕ найден домен в запросе [500].');
                        } else if (exception === 'parsererror') {
                           alert("Ошибка в коде: \n"+jqXHR.responseText);
                        } else if (exception === 'timeout') {
                           alert('Не ответил на запрос.');
                        } else if (exception === 'abort') {
                           alert('Прерван запрос Ajax.');
                        } else {
                           alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                        }
                     },
               dataType:"text",        
            }); 
         
            $("#count_chars_update_at").val(countChars);
            $("#re_chars_update_at").val(searchInput);
         }
}   

function getSearchCategory(){
         var maskInput = $("#search_category").val();
         if (maskInput == '') {
            return false;

         }
         var cStart = $("#count_chars_category").val();
         var countChars = maskInput.replace(/\s+/g, "").length;
         if(countChars != 0)
         {
            var cStartw = $("#re_chars_category").val();
            var searchInput = $("#search_category").val();
         }
         else
         {
            var cStartw = "";
            var searchInput = "";
         }
         if(cStart != countChars || cStartw != searchInput)
         {  
            $.ajax({
               url:'index.php?a=ajax_request',
               type:'POST',
               data:{search_category:searchInput,
                     a:'ajax_request'},
               success: function(data){                            
                           $('#search_result').html(data); 
                        },
               error: function(jqXHR, exception)
                     {
                        if (jqXHR.status === 0) {
                           alert('НЕ подключен к интернету!');
                        } else if (jqXHR.status == 404) {
                           alert('НЕ найдена страница запроса [404])');
                        } else if (jqXHR.status == 500) {
                           alert('НЕ найден домен в запросе [500].');
                        } else if (exception === 'parsererror') {
                           alert("Ошибка в коде: \n"+jqXHR.responseText);
                        } else if (exception === 'timeout') {
                           alert('Не ответил на запрос.');
                        } else if (exception === 'abort') {
                           alert('Прерван запрос Ajax.');
                        } else {
                           alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                        }
                     },
               dataType:"text",        
            }); 
         
            $("#count_chars_category").val(countChars);
            $("#re_chars_category").val(searchInput);
         }
}   
      $(document).ready(function(){
         setInterval(getSearchTitle,1000);
      }); 
      $(document).ready(function(){
         setInterval(getSearchInput,1000);
      }); 
      $(document).ready(function(){
         setInterval(getSearchContent,1000);
      });
      $(document).ready(function(){
         setInterval(getSearchCreate_at,1000);
      }); 
      $(document).ready(function(){
         setInterval(getSearchUpdate_at,1000);
      }); 
      $(document).ready(function(){
         setInterval(getSearchCategory,1000);
      });        