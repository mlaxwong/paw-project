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
  window.addEventListener('scroll', windowScollHandle)
  window.addEventListener('resize', windowScollHandle)

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

const parallax = () => {
  // vars
  const parallaxEffectDefaultValue = 0.8

  // elements
  const $elements = document.querySelectorAll('[parallax]')

  // methods
  const windowScollParallaxHandle = () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop

    $elements.forEach($element => {
      const parallaxEffectValue = $element.getAttribute('parallax') ? $element.getAttribute('parallax') : parallaxEffectDefaultValue
      console.log(parallaxEffectValue)
      const elementPosition = scrollTop - $element.offsetTop
      const parallaxEffect = elementPosition * parallaxEffectValue
      const ty = parallaxEffect - elementPosition
      $element.style.transform = 'translate3d(0px, ' + ty + 'px , 0px)'
    })
  }

  const init = () => {
    windowScollParallaxHandle()
  }

  // events
  window.addEventListener('scroll', windowScollParallaxHandle)
  window.addEventListener('resize', windowScollParallaxHandle)

  // init
  init()
}
parallax()
