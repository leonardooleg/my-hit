var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

/**
 * Кеш для отмены
 */
var $comment_cancel_cache = [];

/**
 * Перент последнего редактируемого или добавляемого отзыва
 * Нужен для предотвращения нескольких одновременных редактирований
 */
var $comment_cancel_last_id = -1;

/**
 * Обновление списка комментов, например переход по страницам
 */
$('.container').on('click', '.btn-comment-list', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  skip = $(this).attr('data-skip');

  module = $('#comment_list').attr('data-module');
  key_a = $('#comment_list').attr('data-key-a');
  key_b = $('#comment_list').attr('data-key-b');
  at_page = $('#comment_list').attr('data-at-page');

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  $.ajax(
    {
    type: 'post',
    url: '/comment/ajax/list/',
    data: 'module='+module+'&'+'key_a='+key_a+'&'+'key_b='+key_b+'&'+'at_page='+at_page+'&'+'skip='+skip,
    dataType: "html",

    success: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $('#comment-list-replace').replaceWith(response);
      },

    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }

    });

  return false;
  });

/**
 * Форма добавления нового отзыва или ответа
 */
$('.container').on('click', '.btn-comment-new', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  parent_id = $(this).attr('data-parent-id');

  module = $('#comment_list').attr('data-module');
  key_a = $('#comment_list').attr('data-key-a');
  key_b = $('#comment_list').attr('data-key-b');
  at_page = $('#comment_list').attr('data-at-page');

  //Если уже что-то редактируется - отменяем
  if ($comment_cancel_last_id > 0) $('#comment_'+$comment_cancel_last_id+' > .body').html($comment_cancel_cache[$comment_cancel_last_id]);
    else if ($comment_cancel_last_id == 0) $('#comment-new-root').html($comment_cancel_cache[$comment_cancel_last_id]);

  //Кешируем
  if (parent_id > 0)
    {
    $comment_cancel_cache[parent_id] = $('#comment_'+parent_id+' > .body').html();
    $comment_cancel_last_id = parent_id;
    }
    else
      {
      $comment_cancel_cache[parent_id] = $('#comment-new-root').html();
      $comment_cancel_last_id = 0;
      }

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  //Выполняем ajax запрос и обновляем содержимое контейнера
  $.ajax(
    {
    type: 'post',
    url: '/comment/ajax/new/',
    data: 'module='+module+'&'+'key_a='+key_a+'&'+'key_b='+key_b+'&'+'at_page='+at_page+'&'+'parent_id='+parent_id,
    dataType: "html",

    //Успешно
    success: function (response, status)
      {
      //Для корректного кеширования браузером
      btn.removeAttr('disabled');
      btn.html(btn_html);

      if (parent_id>0)
        {
        $('#comment_'+parent_id+' > .body').html(response);
        }
        else
          {
          btn.replaceWith(response);
          }
      },

    //Ошибка
    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }
  });

  return false;
  });

/**
 * Публикация нового отзыва или ответа
 */
$('.container').on('click', '.btn-comment-create', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  parent_id = $(this).attr('data-parent-id');
  form = $(this).parents('form:first');

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  $.ajax({
    type: form.attr('method'),
    url: form.attr('action'),
    data: form.serialize(),
    dataType: "json",

    success: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      if (response.type == 'success')
        {
        //Убираем форму
        if ($comment_cancel_last_id == 0) $('#comment-new-root').html($comment_cancel_cache[$comment_cancel_last_id]);

        //Работаем с кешем
        $comment_cancel_last_id = -1;

        if (parent_id>0)
          {
          //Обновляем единичный коммент
          $('#comment_'+parent_id).replaceWith(response.comment_info);
          }
          else
            {
            //Обновляем список отзывов
            $('#comment_list').html(response.comment_list);
            var b = document.getElementById('comment_list');
            var c = comment_get_obj_toppos(b);
            if (c)scroll(0, c - 100)

            //Очищаем форму
            $('#comment_'+parent_id+' > .body').html($comment_cancel_cache[parent_id]);
            }
        }

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl(response.text, {theme: response.type, life: response.time});
      },

    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }
  });

  return false;
  });

/**
 * Форма редактирования отзыва
 */
$('.container').on('click', '.btn-comment-modify', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  comment_id = $(this).attr('data-id');

  //Если уже что-то редактируется - отменяем
  if ($comment_cancel_last_id > 0) $('#comment_'+$comment_cancel_last_id+' > .body').html($comment_cancel_cache[$comment_cancel_last_id]);
    else if ($comment_cancel_last_id == 0) $('#comment-new-root').html($comment_cancel_cache[$comment_cancel_last_id]);

  //Кешируем
  $comment_cancel_cache[comment_id] = $('#comment_'+comment_id+' > .body').html();
  $comment_cancel_last_id = comment_id;

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  $.ajax(
    {
    type: 'post',
    url: '/comment/ajax/'+comment_id+'/modify/',
    dataType: "html",

    success: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $('#comment_'+comment_id+' > .body').html(response);
      },

    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }
    });

  return false;
  });

/**
 * Обновление отзыва
 */
$('.container').on('click', '.btn-comment-update', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  comment_id = $(this).attr('data-id');
  form = $(this).parents('form:first');

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  $.ajax({
    type: form.attr('method'),
    url: form.attr('action'),
    data: form.serialize(),
    dataType: "json",

    success: function (response, status)
      {
      //Работаем с кешем
      $comment_cancel_last_id = -1;

      btn.removeAttr('disabled');
      btn.html(btn_html);

      if (response.type == 'success')
        {
        //Обновляем единичный коммент
        $('#comment_' + comment_id).replaceWith(response.comment_info);
        }

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl(response.text, {theme: response.type, life: response.time});
      },

    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }
  });

  return false;

  });

/**
 * Удаление отзыва
 */
$('.container').on('click', '.btn-comment-delete', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  comment_id = $(this).attr('data-id');

  module = $('#comment_list').attr('data-module');
  key_a = $('#comment_list').attr('data-key-a');
  key_b = $('#comment_list').attr('data-key-b');
  at_page = $('#comment_list').attr('data-at-page');

  //Подтверждение удаления
  if (!confirm('Удалить отзыв?')) return false;

  //Если уже что-то редактируется - отменяем
  if ($comment_cancel_last_id > 0) $('#comment_'+$comment_cancel_last_id+' > .body').html($comment_cancel_cache[$comment_cancel_last_id]);
    else if ($comment_cancel_last_id == 0) $('#comment-new-root').html($comment_cancel_cache[$comment_cancel_last_id]);
  $comment_cancel_last_id = -1;

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  $.ajax({
    type: 'post',
    url: '/comment/ajax/'+comment_id+'/delete/',
    data: 'module='+module+'&'+'key_a='+key_a+'&'+'key_b='+key_b,
    dataType: "json",

    success: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      if (response.type == 'success')
        {
        //Удаляем единичный коммент
        $('#comment_' + comment_id).remove();

        //Уменьшаем skip на 1 - для корректного отображения "Показать еще"
        if (!response.parent_id)
          {
          skip = $('.btn-comment-list').attr('data-skip') - 1;
          $('.btn-comment-list').attr('data-skip', skip);
          //
          total_count = $('.span-comment-total-count').html() - 1;
          $('.span-comment-total-count').html(total_count);
          //
          if (!total_count) $('.row-comment-total-count').remove();
          }
        }

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl(response.text, {theme: response.type, life: response.time});
      },

    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }
  });

  return false;

  });

/**
 * Предпросмотр комента перед публикацией
 */
$('.container').on('click', '.btn-comment-preview', function(event)
  {
  event.preventDefault();

  btn = $(this);
  btn_html = btn.html();
  comment_id = $(this).attr('data-id');
  form = $(this).parents('form:first');

  btn.attr('disabled', 'disabled');
  btn.html(btn_html + '&nbsp;&nbsp;<i class="icon-spinner icon-spin icon-large"></i>');

  $.ajax(
    {
    type: 'post',
    url: '/comment/ajax/preview/',
    data: form.serialize()+'&id='+comment_id,
    dataType: "html",

    success: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $('#comment_preview_'+comment_id).html(response);
      var b = document.getElementById('comment_preview_'+comment_id);
      var c = comment_get_obj_toppos(b);
      if (c)scroll(0, c - 50)
      },

    error: function (response, status)
      {
      btn.removeAttr('disabled');
      btn.html(btn_html);

      $.jGrowl.defaults.closer = false;
      $.jGrowl.defaults.corners = '5px';
      $.jGrowl('Ошибка!', {theme: 'error', life: 5000});
      }
    });

  return false;
  });

/**
 * Отмена добавления отзыва
 */
$('.container').on('click', '.btn-comment-cancel', function(event)
  {
  event.preventDefault();

  parent_id = $(this).attr('data-parent-id');

  if (parent_id > 0)
    $('#comment_'+parent_id+' > .body').html($comment_cancel_cache[parent_id]);
    else
      $('#comment-new-root').html($comment_cancel_cache[parent_id]);

  //Работаем с кешем
  $comment_cancel_last_id = -1;

  return false;
  });

///////////////////////////////////////////////////////////////////

/**
 * Находит верхнюю позицию элемента
 */
function comment_get_obj_toppos(obj)
  {
  var top = obj.offsetTop;
  while( (obj = obj.offsetParent) != null )
    top += obj.offsetTop;
  return top;
  };


}
/*
     FILE ARCHIVED ON 17:47:11 Sep 06, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 20:31:25 Sep 29, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 374.184
  exclusion.robots: 0.295
  exclusion.robots.policy: 0.283
  RedisCDXSource: 9.007
  esindex: 0.014
  LoadShardBlock: 317.572 (3)
  PetaboxLoader3.datanode: 289.635 (5)
  CDXLines.iter: 21.597 (3)
  load_resource: 467.402 (2)
  PetaboxLoader3.resolve: 286.038 (2)
*/