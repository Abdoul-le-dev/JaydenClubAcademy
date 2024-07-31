var docReady = function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn);
    } else {
      setTimeout(fn, 1);
    }
  };
  var resize = function resize(fn) {
    return window.addEventListener('resize', fn);
  };
  var isIterableArray = function isIterableArray(array) {
    return Array.isArray(array) && !!array.length;
  };
  var camelize = function camelize(str) {
    var text = str.replace(/[-_\s.]+(.)?/g, function (match, capture) {
      if (capture) {
        return capture.toUpperCase();
      }
      return '';
    });
    return "".concat(text.substr(0, 1).toLowerCase()).concat(text.substr(1));
  };
  var getData = function getData(el, data) {
    try {
      return JSON.parse(el.dataset[camelize(data)]);
    } catch (e) {
      return el.dataset[camelize(data)];
    }
  };

/*-----------------------------------------------
|   Chat
-----------------------------------------------*/
var chatInit = function chatInit() {
    var Events = {
      CLICK: 'click',
      SHOWN_BS_TAB: 'shown.bs.tab',
      KEYUP: 'keyup',
      EMOJI: 'emoji'
    };
    var Selector = {
      CHAT_SIDEBAR: '.chat-sidebar',
      CHAT_CONTACT: '.chat-contact',
      CHAT_CONTENT_SCROLL_AREA: '.chat-content-scroll-area',
      CHAT_CONTENT_SCROLL_AREA_ACTIVE: '.card-chat-pane.active .chat-content-scroll-area',
      CHAT_EMOJIAREA: '.chat-editor-area .emojiarea-editor',
      BTN_SEND: '.btn-send',
      EMOJIEAREA_EDITOR: '.emojiarea-editor',
      BTN_INFO: '.btn-chat-info',
      CONVERSATION_INFO: '.conversation-info',
      CONTACTS_LIST_SHOW: '.contacts-list-show'
    };
    var ClassName = {
      UNREAD_MESSAGE: 'unread-message',
      TEXT_PRIMARY: 'text-primary',
      SHOW: 'show'
    };
    var DATA_KEY = {
      INDEX: 'index'
    };
    var $chatSidebar = document.querySelector(Selector.CHAT_SIDEBAR);
    var $chatContact = document.querySelectorAll(Selector.CHAT_CONTACT);
    var $chatEmojiarea = document.querySelector(Selector.CHAT_EMOJIAREA);
    var $btnSend = document.querySelector(Selector.BTN_SEND);
    var $currentChatArea = document.querySelector(Selector.CHAT_CONTENT_SCROLL_AREA);

    // Set scrollbar position
    var setScrollbarPosition = function setScrollbarPosition($chatArea) {
      if ($chatArea) {
        var scrollArea = $chatArea;
        scrollArea.scrollTop = $chatArea.scrollHeight;
      }
    };
    setTimeout(function () {
      setScrollbarPosition($currentChatArea);
    }, 700);
    document.querySelectorAll(Selector.CHAT_CONTACT).forEach(function (el) {
      el.addEventListener(Events.CLICK, function (e) {
        var $this = e.currentTarget;
        $this.classList.add('active');
        // Hide contact list sidebar on responsive
        window.innerWidth < 768 && !e.target.classList.contains('hover-actions') && ($chatSidebar.style.left = '-100%');

        // Remove unread-message class when read
        $this.classList.contains(ClassName.UNREAD_MESSAGE) && $this.classList.remove(ClassName.UNREAD_MESSAGE);
      });
    });
    $chatContact.forEach(function (el) {
      el.addEventListener(Events.SHOWN_BS_TAB, function () {
        $chatEmojiarea.innerHTML = '';
        $btnSend.classList.remove(ClassName.TEXT_PRIMARY);
        var TargetChatArea = document.querySelector(Selector.CHAT_CONTENT_SCROLL_AREA_ACTIVE);
        setScrollbarPosition(TargetChatArea);
      });
    });

    // change send button color on

    if ($chatEmojiarea) {
      $chatEmojiarea.setAttribute('placeholder', 'Type your message');
      $chatEmojiarea.addEventListener(Events.KEYUP, function (e) {
        if (e.target.textContent.length <= 0) {
          $btnSend.classList.remove(ClassName.TEXT_PRIMARY);
          if (e.target.innerHTML === '<br>') {
            e.target.innerHTML = '';
          }
        } else {
          $btnSend.classList.add(ClassName.TEXT_PRIMARY);
        }
        var TargetChatArea = document.querySelector(Selector.CHAT_CONTENT_SCROLL_AREA_ACTIVE);
        setScrollbarPosition(TargetChatArea);
      });
    }
    // Open conversation info sidebar
    $chatEmojiarea && document.querySelectorAll(Selector.BTN_INFO).forEach(function (el) {
      el.addEventListener(Events.CLICK, function (e) {
        var $this = e.currentTarget;
        var dataIndex = getData($this, DATA_KEY.INDEX);
        var $info = document.querySelector("".concat(Selector.CONVERSATION_INFO, "[data-").concat(DATA_KEY.INDEX, "='").concat(dataIndex, "']"));
        $info.classList.toggle(ClassName.SHOW);
      });
    });

    // Show contact list sidebar on responsive
    document.querySelectorAll(Selector.CONTACTS_LIST_SHOW).forEach(function (el) {
      el.addEventListener(Events.CLICK, function () {
        $chatSidebar.style.left = 0;
      });
    });

    // Set scrollbar area height on resize
      resize(function () {
      var TargetChatArea = document.querySelector(Selector.CHAT_CONTENT_SCROLL_AREA_ACTIVE);
      setScrollbarPosition(TargetChatArea);
    });
  };


  var emojiMartInit = function emojiMartInit() {
    var _ref2 = window.EmojiMart || {},
      Picker = _ref2.Picker;
    if (Picker) {
      var emojiMartBtns = document.querySelectorAll('[data-emoji-mart]');
      if (emojiMartBtns) {
        Array.from(emojiMartBtns).forEach(function (btn) {
          var inputTarget = getData(btn, 'emoji-mart-input-target');
          var input = document.querySelector(inputTarget);
          var picker = new Picker(window._.merge(getData(btn, 'emoji-mart'), {
            previewPosition: 'none',
            skinTonePosition: 'none',
            onEmojiSelect: function onEmojiSelect(e) {
              if (input) input.innerHTML += e["native"];
            },
            onClickOutside: function onClickOutside(e) {
              if (!picker.contains(e.target) && !btn.contains(e.target)) {
                picker.classList.add('d-none');
              }
            }
          }));
          picker.classList.add('d-none');
          btn.parentElement.appendChild(picker);
          btn.addEventListener('click', function () {
            return picker.classList.toggle('d-none');
          });
        });
      }
    }
  };


docReady(chatInit);
docReady(emojiMartInit);
