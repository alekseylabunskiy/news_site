function getSearchInput(){
         var maskInput = $("#search_words").val();
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
            $("#search_result").load("index.php?a=red_articles&search_words=" + searchInput);
            $("#count_chars").val(countChars);
            $("#re_chars").val(searchInput);
         }
      }
      $(document).ready(function(){
         setInterval(getSearchInput,1000);
      });