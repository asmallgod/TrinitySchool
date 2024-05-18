document.addEventListener('DOMContentLoaded', () => {
  initLanguageSwitcher()
})

function initLanguageSwitcher() {
  const languageSwitcher = document.getElementById('language-switcher')
  const languageList = document.getElementById('language-list')
  languageSwitcher.addEventListener('click', () => {
    if (languageList.classList.contains('hidden')) {
      languageList.classList.remove('hidden')
      gsap.fromTo(languageList, { opacity: 0 }, { opacity: 1, duration: 0.2 })
    }
  })

  document.addEventListener('click', (event) => {
    if (!languageSwitcher.contains(event.target)) {
      languageList.classList.add('hidden')
    }
  })
}
