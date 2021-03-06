---
layout: single
elementName: picture
---

<section id="picture" class="element element--experimental">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/picture/" data-element-name="picture" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="picture">Поделиться</a>
        <a target="_blank" href="http://caniuse.com/#feat=picture" data-tooltip="See on Can I use…" rel="external">Can I use</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/picture" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#picture">
        <span>#</span>
        picture
      </a>
        <span class="tag tag--experimental">Эксперементальный</span>
    </h2>
    <div class="element-description">
      <p>Определяет контейнер с элементом <code>&lt;img&gt;</code> с аттрибутом <code>&lt;src&gt;</code> в котором хранится путь к картинке .</p>

    </div>
  </header>

      <div id="picture-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#picture-example-0-code">Копировать</a>
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
          <div id="picture-example-0-code" class="example-code">{% highlight html %}<picture>
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

</section>
