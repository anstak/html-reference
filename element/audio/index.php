---
layout: single
elementName: audio
---

<section id="audio" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
        <span>
          Тип: <strong>block (блочный)</strong>
        </span>
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/audio/" data-element-name="audio" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="audio">Поделиться</a>
        <a target="_blank" href="http://caniuse.com/#feat=audio" data-tooltip="See on Can I use…" rel="external">Can I use</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/audio" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#audio">
        <span>#</span>
        audio
      </a>
    </h2>
    <div class="element-description">
      <p>Позволяет вставить аудио на веб-страницу.</p>

    </div>
  </header>


    <article id="audio-src" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="src">
            src
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет источник аудио файла.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-src-assetshalmp3" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать src=&quot;/assets/Hal.mp3&quot;" data-clipboard-text="src=&quot;/assets/Hal.mp3&quot;">
                      "/assets/Hal.mp3"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>относительный</strong> путь к файлу.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls></audio></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="audio-volume" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="volume">
            volume
          </code>
        </h3>
        <div class="attribute-description">
          <p>Задаёт громкость. между <code>0.0</code> (минимальная громкость) и <code>1.0</code> (максимальная громкость).</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-volume-00" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать volume=&quot;0.0&quot;" data-clipboard-text="volume=&quot;0.0&quot;">
                      "0.0"
                  </code>
                </h4>
              <div class="value-description">
                <p>Звуковая дорожка <strong>без звука</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="0.0"></audio></div>
            </aside>
          </article>
          <article id="audio-volume-10" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать volume=&quot;1.0&quot;" data-clipboard-text="volume=&quot;1.0&quot;">
                      "1.0"
                  </code>
                </h4>
              <div class="value-description">
                <p>Звуковая дорожка звучит на <strong>максимальной громкости</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="1.0"></audio></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="audio-autoplay" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="autoplay">
            autoplay
          </code>
        </h3>
        <div class="attribute-description">
          <p>Звуковая дорожка запустится автоматически при загрузке.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-autoplay-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="1.0"></audio></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="audio-controls" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="controls">
            controls
          </code>
        </h3>
        <div class="attribute-description">
          <p>Показывает встроенные элементы управления звуком в браузере.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-controls-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="1.0"></audio></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="audio-loop" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="loop">
            loop
          </code>
        </h3>
        <div class="attribute-description">
          <p>Звуковая дорожка будет воспроизводиться циклично.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-loop-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="1.0" loop></audio></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="audio-muted" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="muted">
            muted
          </code>
        </h3>
        <div class="attribute-description">
          <p>Звуковая дорожка будет воспроизводиться без звука по умолчанию.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-muted-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="1.0" loop muted></audio></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="audio-preload" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="preload">
            preload
          </code>
        </h3>
        <div class="attribute-description">
          <p>При загрузке страницы звуковая дорожка будет предварительно загружена.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="audio-preload-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><audio  src="/assets/Hal.mp3" controls volume="1.0" loop muted></audio></div>
            </aside>
          </article>
      </div>
    </article>
</section>
