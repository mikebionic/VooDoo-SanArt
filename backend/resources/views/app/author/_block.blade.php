<div class="col-lg-3 col-sm-6">
    <div class="single_team text-center mt-30">
        <div class="team_image">
            <img src="{{ asset($author->avatar_path) }}" alt="team">
        </div>
        <div class="team_content">
            <h6 class="team_name"><a href="{{ route('app.author.show', ['author' => $author]) }}">{{ $author->name }}</a></h6>
            <p>{{ $author->title ?? '###' }}</p>
            <ul class="social">
                @if($author->linkedin_url)
                    <li>
                        <a href="{{ $author->linkedin_url }}" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                @endif
                @if($author->twitter_url)
                    <li>
                        <a href="{{ $author->twitter_url }}" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                @endif
                @if($author->facebook_url)
                    <li>
                        <a href="{{ $author->facebook_url }}" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                @endif
                @if($author->instagram_url)
                    <li>
                        <a href="{{ $author->instagram_url }}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
