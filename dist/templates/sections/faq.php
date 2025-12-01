<?php
$faq = [
    [
        "question" => "Сколько времени занимает изготовление модульного дома?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Кто отвечает за установку на участке и сколько длится процесс?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Как организованы доставка и разгрузка? входит ли это в общую стоимость?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Какую вы даете гарантию на модульный дом и комплектующие?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Сборка происходит на участке или в цехе?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Если участок со сложным рельефом или плохим подъездом – берётесь?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Кто занимается подготовкой участка и подведением электричества/ канализации?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Можно ли изменить планировку или доукомплектовать дом?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
    [
        "question" => "Можно ли приехать на производство и посмотреть, как собираются дома?",
        "answer" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and morerecently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Oonly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasem.",
    ],
];
?>

<section class="faq">
    <div class="container">
        <div class="faq__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Частые вопросы</h2>
            </div>

            <div class="faq__grid">
                <?php foreach ($faq as $item): ?>
                    <div class="faq__item fade-in-up">
                        <button class="faq__question" type="button" aria-expanded="false">
                            <?= $item["question"] ?>
                        </button>
                        <div class="faq__answer">
                            <p><?= $item["answer"] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="faq__button fade-in">
                <button class="button button--outline">Показать все вопросы</button>
            </div>
        </div>
    </div>
</section>