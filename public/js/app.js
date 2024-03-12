const postsContainer = document.querySelector(".posts");
postsContainer.addEventListener("click", (e) => {
    const clickedLikeBtn = e.target.closest(".btn-like");
    const clickedPostImage = e.target.tagName === "IMG";

    if (!clickedLikeBtn && !clickedPostImage) return;

    if (clickedLikeBtn || clickedPostImage) {
        const postEl = e.target.closest(".post");
        let isLiked = postEl.getAttribute("data-status") === "liked";
        if (!postEl) return;

        const likeIcon = postEl.querySelector(".icon-heart");
        const likeBtn = postEl.querySelector(".btn-like");
        const likeCount = postEl.querySelector(".post__likes");
        let currentLikes = Number(likeCount.textContent);

        if (isLiked) {
            currentLikes--;
            likeIcon.style.fill = "transparent";
            likeBtn.style.color = "black";
            postEl.setAttribute("data-status", "disliked");
        } else {
            currentLikes++;
            likeIcon.style.fill = "rgb(239, 68, 68)";
            likeBtn.style.color = "rgb(239, 68, 68)";
            postEl.setAttribute("data-status", "liked");
        }

        likeCount.textContent = currentLikes;
    }
});
