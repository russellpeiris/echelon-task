import { Card } from "./components/card/Card";

interface IArticle {
  author: string
  title: string
  description: string
  url:  string
  urlToImage: string
  publishedAt: string
  content: string
}
export default async function Home() {
  const data = await fetch(`https://newsapi.org/v2/top-headlines?country=us&apiKey=${process.env.API_KEY}`)
  const posts = await data.json()

  return (
    <div>
      <div className="grid grid-cols-5 grid-rows-2 gap-4">
    {
      posts.articles.map((article: IArticle) => {
        return (
          <Card
          key={article.title}
            imageUrl={article.urlToImage}
            title={article.title}
            publisher={article.author}
          />
        )
      })
    }
      </div>
    </div>
  );
}
