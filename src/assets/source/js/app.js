const bodyScrolledClass = () => {
  // vars
  const scrollOffset = 0
  const bodyScrollCssClassName = 'scrolled'

  // elements
  const $body = document.getElementsByTagName('body')[0]

  // methods
  const windowScollHandle = () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop

    if (scrollTop > scrollOffset) {
      enableBodyScrollClass()
    } else {
      disableBodyScrollClass()
    }
  }

  const enableBodyScrollClass = () => {
    if (!$body.classList.contains(bodyScrollCssClassName)) {
      $body.classList.add(bodyScrollCssClassName)
    }
  }

  const disableBodyScrollClass = () => {
    if ($body.classList.contains(bodyScrollCssClassName)) {
      $body.classList.remove(bodyScrollCssClassName)
    }
  }

  const init = () => {
    windowScollHandle()
  }

  // events
  window.onscroll = windowScollHandle
  window.onresize = windowScollHandle

  // init
  init()
}
bodyScrolledClass()

const preloader = () => {
  // elements
  const $preloader = document.getElementById('preloader')

  const timmer = setTimeout(() => {
    $preloader.classList.add('hide')
    clearTimeout(timmer)
  }, 250)
}
preloader()
