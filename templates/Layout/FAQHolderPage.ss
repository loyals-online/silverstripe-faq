<section class="content faq">
    <div class="medium-8 <% if not $Menu(2) %>small-centered<% end_if %> columns">

        <h1>$Title</h1>
        $Content

        <% if $FAQs %>

            <% loop $FAQs.Sort('SortOrder') %>
                <div class="faq-item">
                    <h3 id="FAQ{$ID}">
                        <span class="on"><i>+</i></span>
                        <span><i>-</i></span>
                        $Question
                    </h3>
                    <div class="more" style="display: none;">
                        $Content
                    </div>
                </div>
            <% end_loop %>

        <% end_if %>

    </div>
</section>