const postsContainer = document.querySelector(".posts");
postsContainer.addEventListener("click", (e) => {
    console.log(e.target.classList.contains(".btn-heart"));
    if (
        e.target.classList.contains("btn-heart") ||
        e.target.tagName === "IMG"
    ) {
        const postEl = e.target.closest(".post");
        let isLiked = postEl.getAttribute("data-status") === "liked";
        if (!postEl) return;

        const likeIcon = postEl.querySelector(".icon-heart");
        const likeBtn = postEl.querySelector(".btn-heart");
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
