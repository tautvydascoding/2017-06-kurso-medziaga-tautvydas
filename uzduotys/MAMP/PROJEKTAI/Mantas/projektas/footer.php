<script>!function(a,b,c){var d,e,f;f="PIN_"+~~((new Date).getTime()/864e5),a[f]||(a[f]=!0,a.setTimeout(function(){d=b.getElementsByTagName("SCRIPT")[0],e=b.createElement("SCRIPT"),e.type="text/javascript",e.async=!0,e.src=c,d.parentNode.insertBefore(e,d)},10))}(window,document,"http://assets.pinterest.com/js/pinit_main.js");</script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/BabelSans_500.font.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {
    Cufon.replace('a, .juda').CSS.ready(function() {
      var $menu = $("#slidingMenu");

      /**
       * the first item in the menu,
       * which is selected by default
       */
      var $selected = $menu.find('li:first');

      /**
       * this is the absolute element,
       * that is going to move across the menu items
       * it has the width of the selected item
       * and the top is the distance from the item to the top
       */
      var $moving = $('<li />', {
        className: 'move',
        top: $selected[0].offsetTop + 'px',
        width: $selected[0].offsetWidth + 'px'
      });

      /**
       * each sliding div (descriptions) will have the same top
       * as the corresponding item in the menu
       */
      $('#slidingMenuDesc > div').each(function(i) {
        var $this = $(this);
        $this.css('top', $menu.find('li:nth-child(' + parseInt(i + 2) + ')')[0].offsetTop + 'px');
      });

      /**
       * append the absolute div to the menu;
       * when we mouse out from the menu
       * the absolute div moves to the top (like innitially);
       * when hovering the items of the menu, we move it to its position
       */
      $menu.bind('mouseleave', function() {
          moveTo($selected, 400);
        })
        .append($moving)
        .find('li')
        .not('.move')
        .bind('mouseenter', function() {
          var $this = $(this);
          var offsetLeft = $this.offset().left - 20;
          //slide in the description
          $('#slidingMenuDesc > div:nth-child(' + parseInt($this.index()) + ')').stop(true).animate({
            'width': offsetLeft + 'px'
          }, 400, 'easeOutExpo');
          //move the absolute div to this item
          moveTo($this, 400);
        })
        .bind('mouseleave', function() {
          var $this = $(this);
          var offsetLeft = $this.offset().left - 20;
          //slide out the description
          $('#slidingMenuDesc > div:nth-child(' + parseInt($this.index()) + ')').stop(true).animate({
            'width': '0px'
          }, 400, 'easeOutExpo');
        });;

      /**
       * moves the absolute div,
       * with a certain speed,
       * to the position of $elem
       */
      function moveTo($elem, speed) {
        $moving.stop(true).animate({
          top: $elem[0].offsetTop + 'px',
          width: $elem[0].offsetWidth + 'px'
        }, speed, 'easeOutExpo');
      }
    });
  });
</script>
<style>
  span.reference {
    position: fixed;
    left: 10px;
    bottom: 10px;
    font-size: 14px;
  }

  span.reference a {
    color: #aaa;
    text-decoration: none;
  }
</style>
<script src="js/main.js"></script>
</body>

</html>
