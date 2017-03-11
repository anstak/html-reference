---
layout: single
elementName: source
---

<section id="source" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Yes
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/source/" data-element-name="source" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="source">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/source" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#source">
        <span>#</span>
        source
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>источник</strong> для элемента <code>&lt;audio&gt;</code>, <code>&lt;video&gt;</code>, или <code>&lt;picture&gt;</code>.</p>

    </div>
  </header>

      <div id="source-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#source-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><picture>
 <source
  media="(min-width: 800px)"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w"
  sizes="33.3vw">
 <source
  srcset="/htmlref/images/sunset-720.jpg 2x,
          /htmlref/images/sunset-360.jpg 1x">
 <img src="{{site.url}}/images/sunset.jpg" alt="Picture of a Ha Long Bay sunset">
</picture></div>
          <div id="source-example-0-code" class="example-code">{% highlight html %}<picture>
 <source
  media="(min-width: 800px)"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w"
  sizes="33.3vw">
 <source
  srcset="/htmlref/images/sunset-720.jpg 2x,
          /htmlref/images/sunset-360.jpg 1x">
 <img src="{{site.url}}/images/sunset.jpg" alt="Picture of a Ha Long Bay sunset">
</picture>{% endhighlight %}</div>
        </article>
      </div>

    <article id="source-src" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="src">
            src
          </code>
        </h3>
        <div class="attribute-description">
          <p>URL-адрес, на котором размещены файлы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="source-src-imagestiramisujpg" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать src=&quot;/images/tiramisu.jpg&quot;" data-clipboard-text="src=&quot;/images/tiramisu.jpg&quot;">
                      "/htmlref/images/tiramisu.jpg"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>относительный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><source  src="{{site.url}}/images/tiramisu.jpg"></source></div>
            </aside>
          </article>
          <article id="source-src-siteurlimagestrafficjpg" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать src=&quot;{{site.url}}/images/traffic.jpg&quot;" data-clipboard-text="src=&quot;{{site.url}}/images/traffic.jpg&quot;">
                      "{{site.url}}/images/traffic.jpg"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>абсолютный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><source  src="{{site.url}}/images/traffic.jpg"></source></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="source-srcset" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="srcset">
            srcset
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет список <em>разных</em> <strong>источников</strong> для <em>одних и тех же</em> медиа-файлов. Браузер выберет лучший и использует его.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="source-srcset-imagessunset-360jpg-360w-imagessunset-720jpg-720w-imagessunset-1440jpg-1440w" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать srcset=&quot;/images/sunset-360.jpg 360w, /htmlref/images/sunset-720.jpg 720w, /htmlref/images/sunset-1440.jpg 1440w&quot;" data-clipboard-text="srcset=&quot;/images/sunset-360.jpg 360w, /htmlref/images/sunset-720.jpg 720w, /htmlref/images/sunset-1440.jpg 1440w&quot;">
                      "/htmlref/images/sunset-360.jpg 360w,<br> /htmlref/images/sunset-720.jpg 720w,<br> /htmlref/images/sunset-1440.jpg 1440w"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>дескриптор ширины</strong> как <code>360w</code>. Это значение делится на один из исходных размеров (определенно в аттрибуте<code>sizes</code>) для получения <strong>плотности пикселей
</strong>.</p>
<p>@html</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><source  srcset="/htmlref/images/sunset-360.jpg 360w, /htmlref/images/sunset-720.jpg 720w, /htmlref/images/sunset-1440.jpg 1440w"></source></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="source-sizes" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="sizes">
            sizes
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет список файлов различных <strong>размеров</strong>. Вы можете комбинировать каждый из них с помощью <strong>медиа-запросов</strong>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="source-sizes-min-width-800px-1440px-720px" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать sizes=&quot;(min-width: 800px) 1440px, 720px&quot;" data-clipboard-text="sizes=&quot;(min-width: 800px) 1440px, 720px&quot;">
                      "(min-width: 800px) 1440px, 720px"
                  </code>
                </h4>
              <div class="value-description">
                <p>Браузер будет использовать картинку с разрешением <code>1440px</code> (определено в <code>srcset</code>) если область просмотра больше 800 пикселей.<br>В противном случае будет использовать разрешение в <code>720px</code>.</p>
<p>@html</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><source  sizes="(min-width: 800px) 1440px, 720px"></source></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="source-type" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="type">
            type
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">MIME-тип</a> источника файла.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="source-type-imagejpg" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;image/jpg&quot;" data-clipboard-text="type=&quot;image/jpg&quot;">
                      "image/jpg"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использоватьп только аудио, видео, или картинковый MIME-тип .</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><source  type="image/jpg"></source></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="source-media" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="media">
            media
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет медиа-запрос для источника с <code>&lt;picture&gt;</code>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="source-media-min-width-800px" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать media=&quot;(min-width: 800px)&quot;" data-clipboard-text="media=&quot;(min-width: 800px)&quot;">
                      "(min-width: 800px)"
                  </code>
                </h4>
              <div class="value-description">
                <p><code>&lt;media&gt;</code> будет работать только на мониторах с разрешением больше чем 800px.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><source  media="(min-width: 800px)"></source></div>
            </aside>
          </article>
      </div>
    </article>
</section>
