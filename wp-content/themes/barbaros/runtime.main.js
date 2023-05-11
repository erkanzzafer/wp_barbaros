;(() => {
  'use strict'
  var e,
    r,
    t = {},
    n = {}
  function a(e) {
    if (n[e]) return n[e].exports
    var r = (n[e] = { id: e, loaded: !1, exports: {} })
    return t[e].call(r.exports, r, r.exports, a), (r.loaded = !0), r.exports
  }
  ;(a.m = t),
    (a.n = (e) => {
      var r = e && e.__esModule ? () => e.default : () => e
      return a.d(r, { a: r }), r
    }),
    (a.d = (e, r) => {
      for (var t in r)
        a.o(r, t) &&
          !a.o(e, t) &&
          Object.defineProperty(e, t, { enumerable: !0, get: r[t] })
    }),
    (a.f = {}),
    (a.e = (e) =>
      Promise.all(Object.keys(a.f).reduce((r, t) => (a.f[t](e, r), r), []))),
    (a.u = (e) => e + '.main.js'),
    (a.miniCssF = (e) =>
      266 === e
        ? '266.css'
        : 396 === e
        ? '396.css'
        : { 143: 'app', 666: 'runtime' }[e] + '.main.css'),
    (a.o = (e, r) => Object.prototype.hasOwnProperty.call(e, r)),
    (e = {}),
    (r = 'barbaros:'),
    (a.l = (t, n, o) => {
      if (e[t]) e[t].push(n)
      else {
        var s, i
        if (void 0 !== o)
          for (
            var l = document.getElementsByTagName('script'), u = 0;
            u < l.length;
            u++
          ) {
            var d = l[u]
            if (
              d.getAttribute('src') == t ||
              d.getAttribute('data-webpack') == r + o
            ) {
              s = d
              break
            }
          }
        s ||
          ((i = !0),
          ((s = document.createElement('script')).charset = 'utf-8'),
          (s.timeout = 120),
          a.nc && s.setAttribute('nonce', a.nc),
          s.setAttribute('data-webpack', r + o),
          (s.src = t)),
          (e[t] = [n])
        var p = (r, n) => {
            ;(s.onerror = s.onload = null), clearTimeout(c)
            var a = e[t]
            if (
              (delete e[t],
              s.parentNode && s.parentNode.removeChild(s),
              a && a.forEach((e) => e(n)),
              r)
            )
              return r(n)
          },
          c = setTimeout(
            p.bind(null, void 0, { type: 'timeout', target: s }),
            12e4,
          )
        ;(s.onerror = p.bind(null, s.onerror)),
          (s.onload = p.bind(null, s.onload)),
          i && document.head.appendChild(s)
      }
    }),
    (a.nmd = (e) => ((e.paths = []), e.children || (e.children = []), e)),
    (a.p = ''),
    (() => {
      var e = { 666: 0 },
        r = []
      a.f.j = (r, t) => {
        var n = a.o(e, r) ? e[r] : void 0
        if (0 !== n)
          if (n) t.push(n[2])
          else {
            var o = new Promise((t, a) => {
              n = e[r] = [t, a]
            })
            t.push((n[2] = o))
            var s = a.p + a.u(r),
              i = new Error()
            a.l(
              s,
              (t) => {
                if (a.o(e, r) && (0 !== (n = e[r]) && (e[r] = void 0), n)) {
                  var o = t && ('load' === t.type ? 'missing' : t.type),
                    s = t && t.target && t.target.src
                  ;(i.message =
                    'Loading chunk ' + r + ' failed.\n(' + o + ': ' + s + ')'),
                    (i.name = 'ChunkLoadError'),
                    (i.type = o),
                    (i.request = s),
                    n[1](i)
                }
              },
              'chunk-' + r,
            )
          }
      }
      var t = () => {}
      function n() {
        for (var t, n = 0; n < r.length; n++) {
          for (var o = r[n], s = !0, i = 1; i < o.length; i++) {
            var l = o[i]
            0 !== e[l] && (s = !1)
          }
          s && (r.splice(n--, 1), (t = a((a.s = o[0]))))
        }
        return 0 === r.length && (a.x(), (a.x = () => {})), t
      }
      a.x = () => {
        ;(a.x = () => {}), (s = s.slice())
        for (var e = 0; e < s.length; e++) o(s[e])
        return (t = n)()
      }
      var o = (n) => {
          for (var o, s, [l, u, d, p] = n, c = 0, f = []; c < l.length; c++)
            (s = l[c]), a.o(e, s) && e[s] && f.push(e[s][0]), (e[s] = 0)
          for (o in u) a.o(u, o) && (a.m[o] = u[o])
          for (d && d(a), i(n); f.length; ) f.shift()()
          return p && r.push.apply(r, p), t()
        },
        s = (self.webpackChunkbarbaros = self.webpackChunkbarbaros || []),
        i = s.push.bind(s)
      s.push = o
    })(),
    a.x()
})()

/*Logo Slider*/
$(function(){
  // vars for clients list carousel
   // https://bloggeriz.blogspot.com/2021/02/wep-siteniz-icin-logo-slider-yapm.html
   var $clientcarousel = $('#clients-list');
   var clients = $clientcarousel.children().length;
   var clientwidth = (clients * 220); // 140px width for each client item 
   $clientcarousel.css('width',clientwidth);
   
   var rotating = true;
   var clientspeed = 0;
   var seeclients = setInterval(rotateClients, clientspeed);
   
   $(document).on({
     mouseenter: function(){
       rotating = false; // turn off rotation when hovering
     },
     mouseleave: function(){
       rotating = true;
     }
   }, '#clients');
   
   function rotateClients() {
     if(rotating != false) {
       var $first = $('#clients-list li:first');
       $first.animate({ 'margin-left': '-220px' }, 5000, "linear", function() {
         $first.remove().css({ 'margin-left': '0px' });
         $('#clients-list li:last').after($first);
       });
     }
   }
 });



/*Kilometre Taşı*/
$(document).ready(function () {
  var timelines = $('.cd-horizontal-timeline'),
    eventsMinDistance = 60

  timelines.length > 0 && initTimeline(timelines)

  function initTimeline(timelines) {
    timelines.each(function () {
      var timeline = $(this),
        timelineComponents = {}
      //cache timeline components
      timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper')
      timelineComponents['eventsWrapper'] = timelineComponents[
        'timelineWrapper'
      ].children('.events')
      timelineComponents['fillingLine'] = timelineComponents[
        'eventsWrapper'
      ].children('.filling-line')
      timelineComponents['timelineEvents'] = timelineComponents[
        'eventsWrapper'
      ].find('a')
      timelineComponents['timelineDates'] = parseDate(
        timelineComponents['timelineEvents'],
      )
      timelineComponents['eventsMinLapse'] = minLapse(
        timelineComponents['timelineDates'],
      )
      timelineComponents['timelineNavigation'] = timeline.find(
        '.cd-timeline-navigation',
      )
      timelineComponents['eventsContent'] = timeline.children('.events-content')

      //assign a left postion to the single events along the timeline
      setDatePosition(timelineComponents, eventsMinDistance)
      //assign a width to the timeline
      var timelineTotWidth = setTimelineWidth(
        timelineComponents,
        eventsMinDistance,
      )
      //the timeline has been initialize - show it
      timeline.addClass('loaded')

      //detect click on the next arrow
      timelineComponents['timelineNavigation'].on('click', '.next', function (
        event,
      ) {
        event.preventDefault()
        updateSlide(timelineComponents, timelineTotWidth, 'next')
      })
      //detect click on the prev arrow
      timelineComponents['timelineNavigation'].on('click', '.prev', function (
        event,
      ) {
        event.preventDefault()
        updateSlide(timelineComponents, timelineTotWidth, 'prev')
      })
      //detect click on the a single event - show new event content
      timelineComponents['eventsWrapper'].on('click', 'a', function (event) {
        event.preventDefault()
        timelineComponents['timelineEvents'].removeClass('selected')
        $(this).addClass('selected')
        updateOlderEvents($(this))
        updateFilling(
          $(this),
          timelineComponents['fillingLine'],
          timelineTotWidth,
        )
        updateVisibleContent($(this), timelineComponents['eventsContent'])
      })

      //on swipe, show next/prev event content
      timelineComponents['eventsContent'].on('swipeleft', function () {
        var mq = checkMQ()
        mq == 'mobile' &&
          showNewContent(timelineComponents, timelineTotWidth, 'next')
      })
      timelineComponents['eventsContent'].on('swiperight', function () {
        var mq = checkMQ()
        mq == 'mobile' &&
          showNewContent(timelineComponents, timelineTotWidth, 'prev')
      })

      //keyboard navigation
      $(document).keyup(function (event) {
        if (event.which == '37' && elementInViewport(timeline.get(0))) {
          showNewContent(timelineComponents, timelineTotWidth, 'prev')
        } else if (event.which == '39' && elementInViewport(timeline.get(0))) {
          showNewContent(timelineComponents, timelineTotWidth, 'next')
        }
      })
    })
  }

  function updateSlide(timelineComponents, timelineTotWidth, string) {
    //retrieve translateX value of timelineComponents['eventsWrapper']
    var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
      wrapperWidth = Number(
        timelineComponents['timelineWrapper'].css('width').replace('px', ''),
      )
    //translate the timeline to the left('next')/right('prev')
    string == 'next'
      ? translateTimeline(
          timelineComponents,
          translateValue - wrapperWidth + eventsMinDistance,
          wrapperWidth - timelineTotWidth,
        )
      : translateTimeline(
          timelineComponents,
          translateValue + wrapperWidth - eventsMinDistance,
        )
  }

  function showNewContent(timelineComponents, timelineTotWidth, string) {
    //go from one event to the next/previous one
    var visibleContent = timelineComponents['eventsContent'].find('.selected'),
      newContent =
        string == 'next' ? visibleContent.next() : visibleContent.prev()

    if (newContent.length > 0) {
      //if there's a next/prev event - show it
      var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
        newEvent =
          string == 'next'
            ? selectedDate.parent('li').next('li').children('a')
            : selectedDate.parent('li').prev('li').children('a')

      updateFilling(
        newEvent,
        timelineComponents['fillingLine'],
        timelineTotWidth,
      )
      updateVisibleContent(newEvent, timelineComponents['eventsContent'])
      newEvent.addClass('selected')
      selectedDate.removeClass('selected')
      updateOlderEvents(newEvent)
      updateTimelinePosition(
        string,
        newEvent,
        timelineComponents,
        timelineTotWidth,
      )
    }
  }

  function updateTimelinePosition(
    string,
    event,
    timelineComponents,
    timelineTotWidth,
  ) {
    //translate timeline to the left/right according to the position of the selected event
    var eventStyle = window.getComputedStyle(event.get(0), null),
      eventLeft = Number(eventStyle.getPropertyValue('left').replace('px', '')),
      timelineWidth = Number(
        timelineComponents['timelineWrapper'].css('width').replace('px', ''),
      ),
      timelineTotWidth = Number(
        timelineComponents['eventsWrapper'].css('width').replace('px', ''),
      )
    var timelineTranslate = getTranslateValue(
      timelineComponents['eventsWrapper'],
    )

    if (
      (string == 'next' && eventLeft > timelineWidth - timelineTranslate) ||
      (string == 'prev' && eventLeft < -timelineTranslate)
    ) {
      translateTimeline(
        timelineComponents,
        -eventLeft + timelineWidth / 2,
        timelineWidth - timelineTotWidth,
      )
    }
  }

  function translateTimeline(timelineComponents, value, totWidth) {
    var eventsWrapper = timelineComponents['eventsWrapper'].get(0)
    value = value > 0 ? 0 : value //only negative translate value
    value =
      !(typeof totWidth === 'undefined') && value < totWidth ? totWidth : value //do not translate more than timeline width
    setTransformValue(eventsWrapper, 'translateX', value + 'px')
    //update navigation arrows visibility
    value == 0
      ? timelineComponents['timelineNavigation']
          .find('.prev')
          .addClass('inactive')
      : timelineComponents['timelineNavigation']
          .find('.prev')
          .removeClass('inactive')
    value == totWidth
      ? timelineComponents['timelineNavigation']
          .find('.next')
          .addClass('inactive')
      : timelineComponents['timelineNavigation']
          .find('.next')
          .removeClass('inactive')
  }

  function updateFilling(selectedEvent, filling, totWidth) {
    //change .filling-line length according to the selected event
    var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
      eventLeft = eventStyle.getPropertyValue('left'),
      eventWidth = eventStyle.getPropertyValue('width')
    eventLeft =
      Number(eventLeft.replace('px', '')) +
      Number(eventWidth.replace('px', '')) / 2
    var scaleValue = eventLeft / totWidth
    setTransformValue(filling.get(0), 'scaleX', scaleValue)
  }

  function setDatePosition(timelineComponents, min) {
    for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
      var distance = daydiff(
          timelineComponents['timelineDates'][0],
          timelineComponents['timelineDates'][i],
        ),
        distanceNorm =
          Math.round(distance / timelineComponents['eventsMinLapse']) + 2
      timelineComponents['timelineEvents']
        .eq(i)
        .css('left', distanceNorm * min + 'px')
    }
  }

  function setTimelineWidth(timelineComponents, width) {
    var timeSpan = daydiff(
        timelineComponents['timelineDates'][0],
        timelineComponents['timelineDates'][
          timelineComponents['timelineDates'].length - 1
        ],
      ),
      timeSpanNorm = timeSpan / timelineComponents['eventsMinLapse'],
      timeSpanNorm = Math.round(timeSpanNorm) + 4,
      totalWidth = timeSpanNorm * width
    timelineComponents['eventsWrapper'].css('width', totalWidth + 'px')
    updateFilling(
      timelineComponents['timelineEvents'].eq(0),
      timelineComponents['fillingLine'],
      totalWidth,
    )

    return totalWidth
  }

  function updateVisibleContent(event, eventsContent) {
    var eventDate = event.data('date'),
      visibleContent = eventsContent.find('.selected'),
      selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
      selectedContentHeight = selectedContent.height()

    if (selectedContent.index() > visibleContent.index()) {
      var classEnetering = 'selected enter-right',
        classLeaving = 'leave-left'
    } else {
      var classEnetering = 'selected enter-left',
        classLeaving = 'leave-right'
    }

    selectedContent.attr('class', classEnetering)
    visibleContent
      .attr('class', classLeaving)
      .one(
        'webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function () {
          visibleContent.removeClass('leave-right leave-left')
          selectedContent.removeClass('enter-left enter-right')
        },
      )
    eventsContent.css('height', selectedContentHeight + 'px')
  }

  function updateOlderEvents(event) {
    event
      .parent('li')
      .prevAll('li')
      .children('a')
      .addClass('older-event')
      .end()
      .end()
      .nextAll('li')
      .children('a')
      .removeClass('older-event')
  }

  function getTranslateValue(timeline) {
    var timelineStyle = window.getComputedStyle(timeline.get(0), null),
      timelineTranslate =
        timelineStyle.getPropertyValue('-webkit-transform') ||
        timelineStyle.getPropertyValue('-moz-transform') ||
        timelineStyle.getPropertyValue('-ms-transform') ||
        timelineStyle.getPropertyValue('-o-transform') ||
        timelineStyle.getPropertyValue('transform')

    if (timelineTranslate.indexOf('(') >= 0) {
      var timelineTranslate = timelineTranslate.split('(')[1]
      timelineTranslate = timelineTranslate.split(')')[0]
      timelineTranslate = timelineTranslate.split(',')
      var translateValue = timelineTranslate[4]
    } else {
      var translateValue = 0
    }

    return Number(translateValue)
  }

  function setTransformValue(element, property, value) {
    element.style['-webkit-transform'] = property + '(' + value + ')'
    element.style['-moz-transform'] = property + '(' + value + ')'
    element.style['-ms-transform'] = property + '(' + value + ')'
    element.style['-o-transform'] = property + '(' + value + ')'
    element.style['transform'] = property + '(' + value + ')'
  }

  //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
  function parseDate(events) {
    var dateArrays = []
    events.each(function () {
      var dateComp = $(this).data('date').split('/'),
        newDate = new Date(dateComp[2], dateComp[1] - 1, dateComp[0])
      dateArrays.push(newDate)
    })
    return dateArrays
  }

  function parseDate2(events) {
    var dateArrays = []
    events.each(function () {
      var singleDate = $(this),
        dateComp = singleDate.data('date').split('T')
      if (dateComp.length > 1) {
        //both DD/MM/YEAR and time are provided
        var dayComp = dateComp[0].split('/'),
          timeComp = dateComp[1].split(':')
      } else if (dateComp[0].indexOf(':') >= 0) {
        //only time is provide
        var dayComp = ['2000', '0', '0'],
          timeComp = dateComp[0].split(':')
      } else {
        //only DD/MM/YEAR
        var dayComp = dateComp[0].split('/'),
          timeComp = ['0', '0']
      }
      var newDate = new Date(
        dayComp[2],
        dayComp[1] - 1,
        dayComp[0],
        timeComp[0],
        timeComp[1],
      )
      dateArrays.push(newDate)
    })
    return dateArrays
  }

  function daydiff(first, second) {
    return Math.round(second - first)
  }

  function minLapse(dates) {
    //determine the minimum distance among events
    var dateDistances = []
    for (i = 1; i < dates.length; i++) {
      var distance = daydiff(dates[i - 1], dates[i])
      dateDistances.push(distance)
    }
    return Math.min.apply(null, dateDistances)
  }

  /*
		How to tell if a DOM element is visible in the current viewport?
		http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	*/
  function elementInViewport(el) {
    var top = el.offsetTop
    var left = el.offsetLeft
    var width = el.offsetWidth
    var height = el.offsetHeight

    while (el.offsetParent) {
      el = el.offsetParent
      top += el.offsetTop
      left += el.offsetLeft
    }

    return (
      top < window.pageYOffset + window.innerHeight &&
      left < window.pageXOffset + window.innerWidth &&
      top + height > window.pageYOffset &&
      left + width > window.pageXOffset
    )
  }

  function checkMQ() {
    //check if mobile or desktop device
    return window
      .getComputedStyle(
        document.querySelector('.cd-horizontal-timeline'),
        '::before',
      )
      .getPropertyValue('content')
      .replace(/'/g, '')
      .replace(/"/g, '')
  }
})