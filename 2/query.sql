
-- Задание
SELECT * FROM user
INNER JOIN article_on_user ON article_on_user.user_id = user.id
INNER JOIN article ON article.id = article_on_user.article_id
INNER JOIN comment ON comment.article_id = article.id
INNER JOIN estimation ON estimation.article_id = article.id
WHERE user.id = 1