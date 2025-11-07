<div class="modal fade" id="faqsModal" tabindex="-1" aria-labelledby="faqsModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content faq-modal-content">
            <div class="modal-header faq-modal-header">
                <h5 class="modal-title" id="faqsModal">
                    <i class="fa fa-question-circle"></i>
                    Frequently Asked Questions
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body faq-modal-body">
                <div class="faq-container">
                    @foreach ($faqs as $index => $faq)
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="faq-question">
                                <i class="fa fa-question"></i>
                                <h4>{{ $faq->question }}</h4>
                                <i class="fa fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <div class="answer-content">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="modal-footer faq-modal-footer">
                <button type="button" class="btn btn-primary btn-close-faq" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Modal Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach(item => {
            item.querySelector(".faq-question").addEventListener("click", () => {
                faqItems.forEach(i => i.classList.toggle("active", i === item && !item.classList.contains("active")));
            });
        });

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.style.animationDelay = el.dataset.aosDelay || "0ms";
                    el.style.animationPlayState = "running";
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

        faqItems.forEach(item => observer.observe(item));
    });
</script>