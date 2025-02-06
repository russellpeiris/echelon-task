import Image, { StaticImageData } from "next/image"

interface CardProps {
    imageUrl: string | StaticImageData
    title: string
    publisher: string
}

export const Card: React.FC<CardProps> = ({imageUrl, title, publisher}) => {

    
    return (
        <div className="flex flex-col w-[246px]">
            <div className="w-[246px] h-[164px] object-fill">
            <Image
                alt=""
                width={246}
                height={164}
                src={imageUrl}
            />
            </div>
            <div className="text-[20px]">{title}</div>
            <div className="text-[12px]">{publisher}</div>
        </div>
    )
}